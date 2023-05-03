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
					perc: 36,
					month: 12,
					plus: 10000000,
				}
			},
			loan: {
				first: 15000000,
				perc: 8.0,
				month: 12,
				min: {
					first: 0,
					perc: 2.2,
					month: 3,
				},
				max: {
					first: 400000000,
					perc: 36,
					month: 48
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
			'<div class="container">' +
			'<ul class="nav nav-tabs" id="gsTab" role="tablist">' +
			'<li class="nav-item"><a class="nav-link" id="loan-tab" data-toggle="tab" href="#loan" role="tab" aria-controls="loan" aria-selected="true">Зээлийн тооцоолуур</a></li>' +
			'<li class="nav-item"><a class="nav-link" id="savings-tab" data-toggle="tab" href="#savings" role="tab" aria-controls="savings" aria-selected="true">Итгэлцлийн тооцоолуур</a></li>' +
			'</ul>' +
			'</div>' +
			'<div class="tab-content" id="gsTabContent">' +
			'<div class="tab-pane" id="savings" role="tabpanel" aria-labelledby="savings-tab">' +
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
            '<label>Итгэлцэлийн хүү (жил)</label>' +
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
			'<div class="gs-texts">' +
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
			'</div>' +
			'<div class="tab-pane" id="loan" role="tabpanel" aria-labelledby="loan-tab">' +
			'<div>' +
            '<form class="default-form">' +
			'<div class="form-group">' +
			'<div class="container">' +
			'<div class="row panel-gutters">' +
			'<div class="col-md-3">' +
            '<label>Зээлийн хэмжээ</label>' +
			'<div class="form-group">' +
			'<input type="text" class="form-control" id="loan-first">' +
			'<input type="range" style="margin-top:4px; z-index: 9" data-rel="loan-first" value="' + cnfg.loan.first + '" min="' + cnfg.loan.min.first + '" max="' + cnfg.loan.max.first + '" class="form-range" id="loan-first-range">' +
			'</div>' +
			'</div>' +
			'<div class="col-md-3">' +
			'<label>Зээлийн хугацаа (сар)</label>' +
			'<input type="text" class="form-control" id="loan-month">' +
			'<input type="range" style="margin-top:4px; z-index: 9" data-rel="loan-month" value="' + cnfg.loan.month + '" min="' + cnfg.loan.min.month + '" max="' + cnfg.loan.max.month + '" class="form-range" id="loan-month-range">' +
			'</div>' +
			'<div class="col-md-3">' +
            '<label>Зээлийн хүү (жил)</label>' +
			'<input type="text" class="form-control" id="loan-perc">' +
			'<input type="range" style="margin-top:4px; z-index: 9" data-rel="loan-perc" step="0.01" value="' + cnfg.loan.perc + '" min="' + cnfg.loan.min.perc + '" max="' + cnfg.loan.max.perc + '" class="form-range" id="loan-perc-range">' +
			'</div>' +
			'<div class="col-md-3">' +
            '<label>Зээлийн эргэн төлөлт</label>' +
			'<select id="loan-type" class="chosen-select">' +
			'<option value="1">Үндсэн төлбөр тэнцүү</option>' +
			'<option value="2">Нийт төлбөр тэнцүү</option>' +
			'</select>' +
			'</div>' +
			'</div>' +
			'</div>' +
			'</div>' +
			'<div class="gs-texts">' +
			'<div class="container">' +
			'<div class="row">' +
			'<div class="message-box info" style="display:block" id="loan-txt"></div>' +
			'<div class="message-box warning" style="display:block" id="loan-panel"></div>' +
			'</div>' +
			'</div>' +
			'</div>' +
			'<div class="gs-table">' +
			'<div class="container">' +
			'<div class="table-calculator">' +
			'<table class="calculator-table">' +
			'<thead>' +
			'<tr>' +
			'<th>Сар</th>' +
			'<th>Зээлийн үлдэгдэл</th>' +
			'<th>Үндсэн зээлийн төлбөр</th>' +
			'<th>Бодогдсон хүү</th>' +
			'<th>Нийт төлбөр</th>' +
			'</tr>' +
			'</thead>' +
			'<tbody id="loan-body"></tbody>' +
			'</table>' +
			'</div>' +
			'</div>' +
			'</div>' +
			'</div>' +
            '</form>' +
			'</div>' +
			'</div>';
		var $html = $(fh);

		function tab(tab) {
			$('#gsTab .nav-link').removeClass('active');
			$('#gsTabContent .tab-pane').removeClass('active');
			var $tab = $(tab)
			$tab.addClass('active');
			$('#gsTabContent #' + $tab.attr('aria-controls')).addClass('active');
		}

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
			var loan = {
				first: 15000000,
				month: 12,
				perc: 8.4,
				type: 1
			}
			loanForm(loan)
			$('body').on('change', '#loan input[type=text], #loan select', function() {
				var num = numeral($(this).val());
				if (num.value()) {
					if ($(this).attr('id') === 'loan-first') {
						loan.first = num.value()
					} else if ($(this).attr('id') === 'loan-perc') {
						loan.perc = num.value()
					} else if ($(this).attr('id') === 'loan-month') {
						loan.month = num.value()
					} else if ($(this).attr('id') === 'loan-type') {
						loan.type = num.value()
					}
					loanForm(loan);
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
			$('body').on('change', '#loan input[type=range]', function() {
				var value = $(this).val();
				var num = numeral(value);
				if ($(this).data('rel') === 'loan-first') {
					loan.first = num.value()
				} else if ($(this).data('rel') === 'loan-perc') {
					loan.perc = num.value()
				} else if ($(this).data('rel') === 'loan-month') {
					loan.month = num.value()
				}
				loanForm(loan);
			})
			$('body').on('click', '#gsTab .nav-link', function() {
				event.preventDefault();
				tab('#gsTab #' + $(this).attr('id'));
			})
			$('#calculator').html($html.get(0).innerHTML);
			tab('#gsTab #loan-tab')
			$("#savings input[type=text], #loan input[type=text]").each(function() {
				$(this).inputFilter(function(value) {
					return /^\d*$/.test(value);
				});
			})
		}

		function loanForm(data) {
			var first = numeral(data.first).format('0,0'),
				perc = numeral(data.perc).format('0,0.0'),
				month = numeral(data.month).format('0,0'),
				type = numeral(data.type).format('0,0'),
				loantxt = '',
				lbody = '',
				loanpanel = '';
			$html.find('#loan-type option').removeAttr('selected');
			$html.find('#loan-first').attr('value', first);
			$html.find('#loan-first-range').attr('value', data.first);
			$html.find('#loan-perc').attr('value', perc);
			$html.find('#loan-perc-range').attr('value', data.perc);
			$html.find('#loan-month').attr('value', month);
			$html.find('#loan-month-range').attr('value', data.month);
			$html.find('#loan-type [value=' + type + '] ').attr('selected', 'selected');
			var records = [];
			if (type == 1) {
				var duration = data.month;
				var remaining = data.first;
				var lastPayment = 0;
				var totalInterest = 0;
				var totalPayment = 0;
				var rate = data.perc / 12 / 100;
				for (var m = 0; m < duration; m++) {
					var record = {};
					record['date'] = moment().add(m, 'month').startOf('month');
					record['main'] = data.first / duration;
					record['interest'] = parseInt(remaining * rate);
					record['payment'] = record['main'] + record['interest'];
					remaining = remaining - record['main'];
					record['remaining'] = remaining;
					totalPayment += record['payment'];
					totalInterest += record['interest'];
					lastPayment = record['payment'];
					records.push(record);
				}
				loantxt = 'Та <b>' + numeral(data.first).format('0,00') + '</b> төгрөгийн зээлийг жилийн ' +
                        '<b>' + numeral(data.perc).format('0,00.00') + '%</b>-ийн хүүтэйгээр ' +
                        '<b>' + data.month + '</b> сарын хугацаанд зээлэхэд эхний сард ' +
                        '<b>' + numeral(records[0]['payment']).format('0,00.00') + '</b> төлж сар бүр төлөх хэмжээ буурна.';
				for (const i in records) {
					lbody += '<tr>' +
						'<td class="text-center">' + (parseInt(i) + 1) + '</td>' +
						'<td class="text-center">' + numeral(records[i].remaining).format('0,00') + '</td>' +
						'<td class="text-right">' + numeral(records[i].main).format('0,00') + '</td>' +
						'<td class="text-right">' + numeral(records[i].interest).format('0,00') + '</td>' +
						'<td class="text-right">' + numeral(records[i].payment).format('0,00') + '</td>' +
						'</tr>';
				}
				loanpanel = '<div class="row">' +
                        '<div class="col-6">Зээлийн хугацаанд нийт төлөх төлбөр<h4>' + numeral(totalPayment).format('0,00') + ' ₮</h4></div>' +
                        '<div class="col-6">Зээлийн хугацаанд төлөх хүүгийн төлбөр<h4>' + numeral(totalInterest).format('0,00') + ' ₮</h4></div>' +
                        '</div>';
			}
			if (type == 2) {
				var duration = data.month;
				var remaining = data.first;
				var totalInterest = 0;
				var totalPayment = 0;
				var rate = data.perc / 12 / 100;
				var rp = pmt(rate, duration, data.first * -1);
				for (var m = 0; m < duration; m++) {
					var record = {};
					record['date'] = moment().add(m, 'month').startOf('month');
					record['payment'] = rp;
					record['interest'] = remaining * rate;
					record['main'] = record['payment'] - record['interest'];
					remaining = remaining - record['main'];
					record['remaining'] = remaining;
					totalPayment += record['payment'];
					totalInterest += record['interest'];
					records.push(record);
				}
				loantxt = 'Та <b>' + numeral(data.first).format('0,00') + '</b> зээлийг жилийн ' +
					'<b>' + numeral(data.perc).format('0,00.00') + '%</b>-ийн хүүтэйгээр ' +
					'<b>' + data.month + '</b> сарын хугацаанд зээлэхэд сард ' +
					'<b>' + numeral(records[0]['payment']).format('0,00.00') + '</b> төгрөг төлнө.';
				loanpanel = '<div class="row">' +
					'<div class="col-3">Сар бүрийн төлбөр<h4>' + numeral(records[0].payment).format('0,00') + ' ₮</h4></div>' +
					'<div class="col-4">Зээлийн хугацаанд нийт төлөх төлбөр<h4>' + numeral(totalPayment).format('0,00') + ' ₮</h4></div>' +
					'<div class="col-4">Зээлийн хугацаанд төлөх хүүгийн төлбөр<h4>' + numeral(totalInterest).format('0,00') + ' ₮</h4></div>' +
					'</div>';
				for (const i in records) {
					lbody += '<tr>' +
						'<td class="text-center">' + (parseInt(i) + 1) + '</td>' +
						'<td class="text-center">' + numeral(records[i].remaining).format('0,00') + '</td>' +
						'<td class="text-right">' + numeral(records[i].main).format('0,00') + '</td>' +
						'<td class="text-right">' + numeral(records[i].interest).format('0,00') + '</td>' +
						'<td class="text-right">' + numeral(records[i].payment).format('0,00') + '</td>' +
						'</tr>';
				}
			}
			$html.find('#loan-body').html(lbody);
			$html.find('#loan-txt').html(loantxt);
			$html.find('#loan-panel').html(loanpanel);
			$('#calculator').html($html.get(0).innerHTML);
			tab('#gsTab #loan-tab')
		}

		function pmt(ir, np, pv, fv, mode) {
			var pmt, pvif;
			fv || (fv = 0);
			mode || (mode = 0);
			if (ir === 0) {
				return -(pv + fv) / np;
			}
			pvif = Math.pow(1 + ir, np);
			pmt = -ir * pv * (pvif + fv) / (pvif - 1);
			if (mode === 1)
				pmt /= (1 + ir);
			return pmt;
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
			tab('#gsTab #savings-tab');
		}
	} else {
		document.getElementById('calculator').innerHTML = 'jQuery шаардлагатай!!!';
		return false;
	}
}