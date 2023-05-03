window.onload = function() {
	if (window.jQuery) {
		function isObject(item) {
			return (item && typeof item === 'object' && !Array.isArray(item));
		}

		function mergeDeep(target, ...sources) {
			if (!sources.length) return target;
			const source = sources.shift();
			if (isObject(target) && isObject(source)) {
				for (const key in source) {
					if (isObject(source[key])) {
						if (!target[key]) Object.assign(target, {
							[key]: {}
						});
						mergeDeep(target[key], source[key]);
					} else {
						Object.assign(target, {
							[key]: source[key]
						});
					}
				}
			}
			return mergeDeep(target, ...sources);
		}
		(function($) {
			$.fn.inputFilter = function(inputFilter) {
				return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
					if (inputFilter(this.value)) {
						this.oldValue = this.value;
						this.oldSelectionStart = this.selectionStart;
						this.oldSelectionEnd = this.selectionEnd;
					} else if (this.hasOwnProperty("oldValue")) {
						this.value = this.oldValue;
						this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
					} else {
						this.value = "";
					}
				});
			};
		}(jQuery));
		var def = {
			save: {
				first: 5000000,
				perc: 21.00,
				month: 12,
				plus: 0,
				min: {
					first: 0,
					perc: 2,
					month: 6,
					plus: 0,
				},
				max: {
					first: 2000000000,
					perc: 21,
					month: 12,
					plus: 10000000,
				}
			}
		}
		if (typeof cfg === "object") {
			var cnfg = mergeDeep(def, cfg);
		} else {
			var cnfg = def;
		}
		$.when($.getScript("https://cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"), $.getScript("https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"), $.Deferred(function(deferred) {
			$(deferred.resolve);
		})).done(function() {
			numeral.register('locale', 'mn', {
				delimiters: {
					thousands: ',',
					decimal: '.'
				},
				abbreviations: {
					thousand: 'м',
					million: 'с',
					billion: 'т',
					trillion: 'и'
				},
				ordinal: function(number) {
					return number === 1 ? 'er' : 'ème';
				},
				currency: {
					symbol: '₮'
				}
			});
			numeral.locale('mn');
			init()
		});
		var fh = '<div>' +
			'<div>' +
			'<div id="savings">' +
			'<div>' +
			'<form class="default-form">' +
			'<div class="form-group">' +
			'<div class="container">' +
			'<div class="row panel-gutters">' +
			'<div class="col-md-3">' +
			'<label>Данс нээх хэмжээ</label>' +
			'<div class="form-group">' +
			'<input type="text" class="form-control" id="save-first">' +
			'<input type="range" style="margin-top:4px; z-index: 9" data-rel="save-first" value="' + cnfg.save.first + '" min="' + cnfg.save.min.first + '" max="' + cnfg.save.max.first + '" class="form-range" id="save-first-range">' +
			'</div>' +
			'</div>' +
			'<div class="col-md-3">' +
			'<label>Хугацаа (сар)</label>' +
			'<input type="text" class="form-control" id="save-month">' +
			'<input type="range" style="margin-top:4px; z-index: 9" data-rel="save-month" value="' + cnfg.save.month + '" min="' + cnfg.save.min.month + '" max="' + cnfg.save.max.month + '" class="form-range" id="save-month-range">' +
			'</div>' +
			'<div class="col-md-3">' +
			'<label>Итгэлцлийн хүү (жил)</label>' +
			'<input type="text" class="form-control" id="save-perc">' +
			'<input type="range" style="margin-top:4px; z-index: 9" data-rel="save-perc" step="0.01" value="' + cnfg.save.perc + '" min="' + cnfg.save.min.perc + '" max="' + cnfg.save.max.perc + '" class="form-range" id="save-perc-range">' +
			'</div>' +
			'<div class="col-md-3">' +
			'<label>Сар бүр нэмэх дүн</label>' +
			'<div class="form-group">' +
			'<input type="text" class="form-control" id="save-plus">' +
			'<input type="range" style="margin-top:4px; z-index: 9" data-rel="save-plus" value="' + cnfg.save.plus + '" min="' + cnfg.save.min.plus + '" max="' + cnfg.save.max.plus + '" class="form-range" id="save-plus-range">' +
			'</div>' +
			'</div>' +
			'</div>' +
			'</div>' +
			'</div>' +
			'<div class="container">' +
			'<div class="row">' +
			'<div class="message-box info" style="display:block" id="save-txt"></div>' +
			'<div class="message-box warning" style="display:block" id="save-panel"></div>' +
			'</div>' +
			'</div>' +
			'</div>' +
			'<div class="gs-table">' +
			'<div class="container">' +
			'<div class="table-calculator">' +
			'<table class="calculator-table">' +
			'<thead class="text-center">' +
			'<tr>' +
			'<th>Огноо</th>' +
			'<th>Хүү тооцсон огноо</th>' +
			'<th>Бодогдсон хүү</th>' +
			'<th>Хадгалсан мөнгө</th>' +
			'<th>Нийт мөнгө</th>' +
			'<th>Хуримтлагдсан хүү</th>' +
			'</tr>' +
			'</thead>' +
			'<tbody id="savings-body"></tbody>' +
			'</table>' +
			'</div>' +
			'</form>' +
			'</div>' +
			'</div>' +
			'</div>' +
			'</div>';
		var $html = $(fh);

		function init() {
			var savings = {
				first: cnfg.save.first,
				perc: cnfg.save.perc,
				month: cnfg.save.month,
				plus: cnfg.save.plus
			}
			savingForm(savings);
			$('body').on('change', '#savings input[type=text]', function() {
				var num = numeral($(this).val());
				if (num.value() >= 0) {
					if ($(this).attr('id') === 'save-first') {
						savings.first = num.value()
					} else if ($(this).attr('id') === 'save-perc') {
						savings.perc = num.value()
					} else if ($(this).attr('id') === 'save-month') {
						savings.month = num.value()
					} else if ($(this).attr('id') === 'save-plus') {
						savings.plus = num.value()
					}
					savingForm(savings);
				} else {
					$(this).val(0);
				}
			})
			$('body').on('change', '#savings input[type=range]', function() {
				var value = $(this).val();
				var num = numeral(value);
				if ($(this).data('rel') === 'save-first') {
					savings.first = num.value()
				} else if ($(this).data('rel') === 'save-perc') {
					savings.perc = num.value()
				} else if ($(this).data('rel') === 'save-month') {
					savings.month = num.value()
				} else if ($(this).data('rel') === 'save-plus') {
					savings.plus = num.value()
				}
				savingForm(savings);
			})
		}

		function savingForm(data) {
			var first = numeral(data.first).format('0,0'),
				perc = numeral(data.perc).format('0,0.0'),
				month = numeral(data.month).format('0,0'),
				plus = numeral(data.plus).format('0,0');
			$html.find('#save-first').attr('value', first);
			$html.find('#save-first-range').attr('value', data.first);
			$html.find('#save-perc').attr('value', perc);
			$html.find('#save-perc-range').attr('value', data.perc);
			$html.find('#save-month').attr('value', month);
			$html.find('#save-month-range').attr('value', data.month);
			$html.find('#save-plus').attr('value', plus);
			$html.find('#save-plus-range').attr('value', data.plus);
			var d = [{
				date: moment().startOf('month').format('YYYY.MM.DD'),
				days: moment().daysInMonth(),
				money: data.first,
				supp: 0,
				total: data.first,
				pd: 0,
				dp: 0
			}];
			var rate = data.perc / 365;
			for (let i = 1; i <= data.month; i++) {
				var prev = i - 1,
					m = moment().add(i, 'month').startOf('month'),
					s = d[prev].money + data.plus,
					money = d[prev].total + data.plus,
					p = rate * d[prev].days * (d[prev].total / 100),
					t = money + p,
					dp = t - s;
				d.push({
					date: m.format('YYYY.MM.DD'),
					days: m.daysInMonth(),
					money: s,
					supp: p,
					total: t,
					pd: d[prev].days,
					dp
				})
			}
			var text = 'Та <b>' + first + '₮</b> данс нээгээд сар бүр ' +
				'<b>' + plus + '₮</b> дансандаа орлого хийх болзолтой жилийн ' +
				'<b>' + perc + '%</b>-ийн хүүтэйгээр хадгалуулснаар ' +
				'<b>' + month + '</b> сарын дараа таны хадгаламж ' +
				'<b>' + numeral(t).format('0,00.00') + '₮</b> болж өснө.';
			var panel = '<div class="row">' +
				'<div class="col-md-4">Нийт мөнгөн дүн <h4>' + numeral(t).format('0,00') + '₮</h4></div>' +
				'<div class="col-md-4">Хуримтлуулсан мөнгө <h4>' + numeral(s).format('0,00') + '₮</h4></div>' +
				'<div class="col-md-4">Цуглуулсан хүү <h4>' + numeral(dp).format('0,00') + '₮</h4></div>' +
				'</div>'
			$html.find('#save-txt').html(text);
			$html.find('#save-panel').html(panel);
			var sb = '';
			for (const i in d) {
				sb += '<tr>' +
					'<td class="text-center">' + d[i].date + '</td>' +
					'<td class="text-center">' + d[i].pd + '</td>' +
					'<td class="text-right">' + numeral(d[i].supp).format('0,00.00') + '</td>' +
					'<td class="text-right">' + numeral(d[i].money).format('0,00') + '</td>' +
					'<td class="text-right">' + numeral(d[i].total).format('0,00.00') + '</td>' +
					'<td class="text-right">' + numeral(d[i].dp).format('0,00.00') + '</td>' +
					'</tr>'
			}
			$html.find('#savings-body').html(sb);
			$('#calculator').html($html.get(0).innerHTML);
		}
	} else {
		document.getElementById('calculator').innerHTML = 'jQuery шаардлагатай!';
		return false;
	}
}