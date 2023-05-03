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
			loan: {
				first: 15000000,
				perc: 8.4,
				month: 6,
				min: {
					first: 0,
					perc: 2.2,
					month: 12,
				},
				max: {
					first: 400000000,
					perc: 36,
					month: 360
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
			'<div id="loan">' +
			'<div>' +
			'<form class="default-form">' +
			'<div class="form-group">' +
			'<div class="container">' +
			'<div class="row panel-gutters">' +
			'<div class="col-md-3"><label>Зээлийн хэмжээ</label>' +
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
			'<div class="col-md-3"><label>Зээлийн хүү (жилээр)</label>' +
			'<input type="text" class="form-control" id="loan-perc">' +
			'<input type="range" style="margin-top:4px; z-index: 9" data-rel="loan-perc" step="0.01" value="' + cnfg.loan.perc + '" min="' + cnfg.loan.min.perc + '" max="' + cnfg.loan.max.perc + '" class="form-range" id="loan-perc-range">' +
			'</div>' +
			'<div class="col-md-3"><label>Зээлийн эргэн төлөлт</label>' +
			'<select class="chosen-select" id="loan-type">' +
			'<option value="1">Үндсэн төлбөр тэнцүү</option>' +
			'<option value="2">Нийт төлбөр тэнцүү</option>' +
			'</select>' +
			'</div>' +
			'</div>' +
			'</div>' +
			'</div>' +
			'<div class="container">' +
			'<div class="row">' +
			'<div class="message-box info" style="display:block" id="loan-txt"></div>' +
			'<div class="message-box warning" style="display:block" id="loan-panel"></div>' +
			'</div>' +
			'</div>' +
			'</div>' +
			'<div class="gs-table">' +
			'<div class="container">' +
			'<div class="table-outer">' +
			'<table class="loan-table">' +
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
			'</form>' +
			'</div>' +
			'</div>' +
			'</div>' +
			'</div>';
		var $html = $(fh);

		function init() {
			var loan = {
				first: 15000000,
				month: 6,
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
			$('#calculator').html($html.get(0).innerHTML);
			$("#loan input[type=text]").each(function() {
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
				loantxt = 'Та&nbsp<b>' + numeral(data.first).format('0,00') + '</b>&nbspтөгрөгийн зээлийг жилийн ' +
					'<b>&nbsp' + numeral(data.perc).format('0,00.00') + '%</b>-ийн хүүтэйгээр' +
					'<b>&nbsp' + data.month + '</b>&nbspсарын хугацаанд зээлэхэд эхний сард ' +
					'<b>' + numeral(records[0]['payment']).format('0,00.00') + '</b>&nbspтөгрөг төлж, сар бүр төлөх хэмжээ буурна.';
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
				loantxt = 'Та <span class="gs-text">' + numeral(data.first).format('0,00') + '</span> хэмжээний төгрөгийн зээлийг жилийн ' +
					'<span class="gs-text">' + numeral(data.perc).format('0,00.00') + '%</span>-ийн хүүтэйгээр ' +
					'<span class="gs-text">' + data.month + '</span> сарын хугацаанд зээлэхэд эхний сард ' +
					'<span class="gs-text">' + numeral(records[0]['payment']).format('0,00.00') + '</span> төгрөг төлж, сар бүр төлөх хэмжээ буурна.';
				loanpanel = '<div class="row">' +
					'<div class="col-md-4"><div class="gs-panel"><span>Сар бүрийн төлбөр</span><h4>' + numeral(records[0].payment).format('0,00') + ' <small class="mnt">₮</small></h4></div></div>' +
					'<div class="col-md-4"><div class="gs-panel"><span>Зээлийн хугацаанд нийт төлөх төлбөр</span><h4>' + numeral(totalPayment).format('0,00') + ' <small class="mnt">₮</small></h4></div></div>' +
					'<div class="col-md-4"><div class="gs-panel"><span>Зээлийн хугацаанд төлөх хүүгийн төлбөр</span><h4>' + numeral(totalInterest).format('0,00') + ' <small class="mnt">₮</small></h4></div></div>' +
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
	} else {
		document.getElementById('calculator').innerHTML = 'jQuery шаардлагатай!!!';
		return false;
	}
}