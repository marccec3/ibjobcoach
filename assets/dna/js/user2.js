/////////////
// BlockUI //
/////////////
function blockUI(message)
{
	var html = '<div class="loading-message loading-message-boxed"><img src="' + basePath + 'assets/admin/img/loading-spinner-grey.gif" align=""><span>&nbsp;&nbsp;' + (message ? message : _('Processando...')) + '</span></div>';
	$.blockUI({
		message: html,
		baseZ: 1300,
		css: {
			border: '0',
			padding: '0',
			backgroundColor: 'none'
		},
		overlayCSS: {
			backgroundColor: '#555',
			opacity: 0.75,
			cursor: 'wait'
		}
	});
}
function unblockUI()
{
	$.unblockUI();
}

/////////////////////
// Session Timeout //
/////////////////////
if ($.sessionTimeout && 'undefined' !== sessionTimeout) {
	$.sessionTimeout({
		title: _('Tempo Limite da Session'),
		message: _('usted esta ¡ inativo¡ bastante tempo. Por medida de seguridad.'),
		keepAliveUrl: basePath + 'login/keepAlive',
		redirUrl: basePath + 'login/expireSession/4',
		logoutUrl: basePath + 'login/doLogout.php',
		warnAfter: (sessionTimeout - 2) * 60 * 1000,    // 2 minutes before the session expires
		redirAfter: (sessionTimeout - 1) * 60 * 1000,    // 1 minute before the session expires
		keepAliveInterval: 3000,
		stayConnectedBtn: _('Ficar conectado'),
		logoutBtn: _('Sair'),
	});
}

function showTutorialVideo($pais = 'es', $user_id = null) {
	if($pais == 'es') showTutorialVideoEs();
	if($pais == 'pt') showTutorialVideoPt();

	if($user_id != null)
		$.post("../checkProgress/saw_video", {"user_id":$user_id}, function(data){});
}

function hideAlert(alert) {
	$('.'+alert).hide();
}

function showTutorialVideoEs() {

	$('#modal-tutorial-es').modal('show');
	//$("#video-es").vimeo("play");

	$(".btn-fechar-tutorial").click(function(){
		//$("#video-es").vimeo("unload");
		$("#video-es")[0].contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');
	});

	$('#modal-tutorial-es').on('hidden.bs.modal', function () {
		//$("#video-es").vimeo("unload");
		$("#video-es")[0].contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');
	});
}

function showTutorialVideoPt() {

	$('#modal-tutorial-br').modal('show');
	//$("#video-br").vimeo("play");

	$(".btn-fechar-tutorial").click(function(){
		//$("#video-br").vimeo("unload");
		$("#video-br")[0].contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');
	});

	$('#modal-tutorial-br').on('hidden.bs.modal', function () {
		$("#video-br")[0].contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');
	});

}

// Document Ready
$(document).ready(function() {
	url = window.location.href;
	anchorIndex = url.indexOf("#");
	if(anchorIndex>0) {
		anchor = url.substring(anchorIndex+1);
		if($('#'+ anchor).length > 0) {
			openNavArea(anchor);
		}
	}

	/*if ($('#modal-tutorial-es').length && $('#modal-tutorial-es').attr('data-test') == 'yes' && 'function' === typeof $.fn.vimeo) {
		showTutorialVideoEs();
	}

	if ($('#modal-tutorial-br').length && $('#modal-tutorial-br').attr('data-test') == 'yes' && 'function' === typeof $.fn.vimeo) {
		showTutorialVideoPt();
	}*/

	function getCountryCode(e) {

		if(e == 9) return "ar";
		else if(e == 2) return "br";
		else if(e == 4) return "us";
		else if(e == 3) return "pe";
		else if(e == 20) return "co";
		else if(e == 104) return "mx";
		else return "cl";
	}

	$('[data-toggle="tooltip"]').tooltip({
		'container'	: 'body',
	});
	$('body').removeClass('loading');

	fixCircleColor();

	var phoneInputs = $('[name = "phone"]');

	$('#current_country_id').on("change", function() {
		$('[name = "phone"]').intlTelInput("setCountry", getCountryCode($(this).val()));
	});

	if(phoneInputs.length && phoneInputs.is(':visible')) {
		if(phoneInputs[0].value.indexOf("+") && phoneInputs[0].value!=""){
			phoneInputs[0].value = "+" + phoneInputs[0].value;
		}
		phoneInputs.intlTelInput({
			onlyCountries: ["ar", "br", "cl", "us", "pe", "co", "mx"],
			preferredCountries : ["br"],
			nationalMode: true,
		});

		phoneInputs.inputmask('remove');
		//evento para quando mudar o paÃ­s, mudar a mascara
		phoneInputs.on("countrychange", function(e, countryData) {
			var country = phoneInputs.intlTelInput("getSelectedCountryData")['iso2'];

			switch (country) {
				case "ar":
				$('[name = "phone"]').inputmask({"mask":"+54 999[999]-99[99]-9999"});
				break;
		
				case "br":
				$('[name = "phone"]').inputmask({"mask":"+55 (99) 9999[9]-9999"});
				break;
				
				case "us":
				$('[name = "phone"]').inputmask({"mask":"+1 999-999-9999"});
				break;
				
				case "pe":
				$('[name = "phone"]').inputmask({"mask":"+51 (99[9]) 999[9]-9999"});
				break;
				
				case "co":
				$('[name = "phone"]').inputmask({"mask":"+57 999[99]-999-9999"});
				break;
				
				case "mx":
				$('[name = "phone"]').inputmask({"mask":"+52 99[9]-999[9]-9999"});
				break;
				
				case "cl":
				$('[name = "phone"]').inputmask({"mask":"+56 99 999 9999"});
				break;
		
				default:
				$('[name = "phone"]').inputmask("remove");
				break;
			}
		});

		phoneInputs.trigger("countrychange");
	}

	var min = $('#min_income');
	if(min.length){
		$('#min_income').on('blur', function(event) {
			$('#max_income').attr('min', $('#min_income').val());
		});
		$('#max_income').on('blur', function(event) {
			$('#min_income').attr('max', $('#max_income').val());
		});
	}

	var multSelects = $('.mult-select');
	if(multSelects.length) {
		$('.mult-select').select2();
	}

	if($('#user-references-panel').length)
		$('#button-add-user-reference').on('click', function(event) {
			var id = parseInt($('#to-copy-reference')[0].getAttribute("data-num"));
			var novo = $('#to-copy-reference').clone();
			novo.removeAttr('id');
			novo.removeAttr('hidden');
			$('#user-references-panel').append(novo);
			$('#user-references-panel').append('<hr>');
			$('#user-references-panel').append($('#button-add-user-reference'));

			//muda names para prÃ³xima cÃ³pia
			var to_copy = $('#to-copy-reference');
			to_copy.find('input[name="references['+id+'][name]"]')[0].setAttribute("name", "references["+(id+1)+"][name]");
			to_copy.find('input[name="references['+id+'][id]"]')[0].setAttribute("name", "references["+(id+1)+"][id]");
			to_copy.find('input[name="references['+id+'][email]"]')[0].setAttribute("name", "references["+(id+1)+"][email]");
			to_copy.find('input[name="references['+id+'][phone]"]')[0].setAttribute("name", "references["+(id+1)+"][phone]");
			to_copy.find('input[name="references['+id+'][company]"]')[0].setAttribute("name", "references["+(id+1)+"][company]");
			to_copy.find('input[name="references['+id+'][position]"]')[0].setAttribute("name", "references["+(id+1)+"][position]");

			//aumenta o id
			$('#to-copy-reference')[0].setAttribute("data-num", id+1);
		});

	var area = (window.location.href).split("#");
	var position = $('#itens-menu').position();
	if(area.length > 1 && position != undefined) {
		$("a[href='/#"+area[1]+"']").tab('show');
		$('html, body').animate({ scrollTop: position.top - 50}, 1000 );
	}

	$("#btn-languages a").on("click", function(){
		var login = $("#login-email").val();
		var pass  = $("#login-password").val();

		setCookie("login-email", login);
		setCookie("login-password", pass);
	});

	$('#doLogin').submit(function() {
		setCookie("login-email", "");
		setCookie("login-password", "");
	});
	openAreasContent();
});

/////////////////////////////
// FormulÃ¡rio de AvaliaÃ§Ã£o //
/////////////////////////////
if ($('form.evaluation').length) {
	$('form.evaluation').on('submit', function(event) {
		event.preventDefault();
		var $form = $(this),
			$id = $form.find('input[name="id"]'),
			id;
		if (! $form.hasClass('program') && (! $id || ! $id.length)) {
			bootbox.alert(_('ID da sessÃ£o nÃ£o foi localizado.'));
			return;
		}
		id = parseInt($id.val(), 10);
		if (! $form.hasClass('program') && ! id) {
			bootbox.alert(_('ID de sesion  no se localizado.'));
			return;
		}
		bootbox.confirm(_('Tem certeza que deseja enviar esta avaliaÃ§Ã£o?') + ' <b>' + _('NÃ£o serÃ¡ possÃ­vel alterÃ¡-la no futuro.') + '</b>', function(result) {
			if (result === true) {
				blockUI();
				$.ajax({
					url:		$form.attr('action'),
					type:		$form.attr('method'),
					dataType:	'json',
					data:		$form.serialize(),
				})
				.done(function(data) {
					var message = _('Desculpe. NÃ£o foi possÃ­vel gravar a avaliaÃ§Ã£o.');
					if (! data || ! data.success) {
						message = data.message && data.message.length ? data.message : message;
						bootbox.alert(message);
						return;
					}
					$form.parent().append('<div class="alert alert-info"><i class="fas fa-info-circle"></i> ' + data.message + '</div>');
					$('html, body').stop().animate({ scrollTop: $form.offset().top, }, 500);
					$form.remove();
				})
				.fail(function() {
					var message = _('Desculpe. Houve um erro ao requisitar o servidor.');
					bootbox.alert(message);
				})
				.always(function() {
					unblockUI();
				});
			}
		});
	});
}

/////////////////////////////
// FormulÃ¡rio de AvaliaÃ§Ã£o (Encuesta) //
/////////////////////////////
if ($('form.encuesta').length) {
	$('form.encuesta').on('submit', function(event) {
		event.preventDefault();
		$form = $(this);
		blockUI();
		$.ajax({
			url:		$form.attr('action'),
			type:		$form.attr('method'),
			dataType:	'json',
			data:		$form.serialize(),
		})
		.done(function(data) {
			var message = _('Desculpe. NÃ£o foi possÃ­vel gravar a avaliaÃ§Ã£o.');
			if (! data || ! data.success) {
				message = data.message && data.message.length ? data.message : message;
				bootbox.alert(message);
				return;
			}
			$form.parent().append('<div class="alert alert-info"><i class="fas fa-info-circle"></i> ' + data.message + '</div>');
			$('html, body').stop().animate({ scrollTop: $form.offset().top, }, 500);
			$form.remove();
		})
		.fail(function() {
			var message = _('Desculpe. Houve um erro ao requisitar o servidor.');
			bootbox.alert(message);
		})
		.always(function() {
			unblockUI();
		});
	});
}


////////////////////
// Reset de Senha //
////////////////////

var $userPwdResetRequestForm = $('#password-reset-request');
var $userNewPwdSetForm = $('#password-set-new');
if ($userPwdResetRequestForm.length) {
	$userPwdResetRequestForm.on('submit', function(event) {
		event.preventDefault();
		blockUI();
		$.ajax({
			url: $userPwdResetRequestForm.attr('action'),
			type: $userPwdResetRequestForm.attr('method'),
			dataType: 'json',
			data: $userPwdResetRequestForm.serialize(),
		})
		.done(function(data) {
			var message = _('Desculpe. Houve um erro ao solicitar o reset da sua senha.');
			message = data.message && data.message.length ? data.message : message;
			if (! data || ! data.success) {
				toastr.error(message, 'Erro!');
				return;
			}
			toastr.success(message, 'Sucesso!');
			$userPwdResetRequestForm.find('button[type="submit"]').prop('disabled', true);
			$userPwdResetRequestForm.off('submit').on('submit', function() {
				toastr.info(_('Sua solicitaÃ§Ã£o jÃ¡ foi realizada. Por favor, verifique seu e-mail.'), 'InformaÃ§Ã£o');
			});
		})
		.fail(function() {
			var message = _('Desculpe. Houve um erro ao solicitar o reset da sua senha ao servidor.');
			toastr.error(message, 'Erro!');
		})
		.always(function() {
			unblockUI();
		});
	});
}
if ($userNewPwdSetForm.length) {
	$userNewPwdSetForm.on('submit', function(event) {
		event.preventDefault();
		blockUI();
		$.ajax({
			url: $userNewPwdSetForm.attr('action'),
			type: $userNewPwdSetForm.attr('method'),
			dataType: 'json',
			data: $userNewPwdSetForm.serialize(),
		})
		.done(function(data) {
			var message = _('Desculpe. Houve um erro ao definir sua nova senha.');
			message = data.message && data.message.length ? data.message : message;
			if (! data || ! data.success) {
				toastr.error(message, 'Erro!');
				return;
			}
			toastr.success(message, 'Sucesso!');
			$userNewPwdSetForm.find('button[type="submit"]').prop('disabled', true);
			setTimeout(function() {
				window.location.href = basePath + 'login';
			}, 5000);
			$userNewPwdSetForm.off('submit').on('submit', function() {
				toastr.info(_('Sua solicitaÃ§Ã£o jÃ¡ foi realizada. Por favor, verifique seu e-mail.'), 'InformaÃ§Ã£o');
			});
		})
		.fail(function() {
			var message = _('Desculpe. Houve um erro ao definir sua nova senha no servidor.');
			toastr.error(message, 'Erro!');
		})
		.always(function() {
			unblockUI();
		});
	});
}

////////////////////////////
// Reenvio de confirmaÃ§ao //
////////////////////////////

var $userResendConfirmationForm = $('#resend-confirmation-request');
if ($userResendConfirmationForm.length) {
	$userResendConfirmationForm.on('submit', function(event) {
		event.preventDefault();
		blockUI();
		$.ajax({
			url: $userResendConfirmationForm.attr('action'),
			type: $userResendConfirmationForm.attr('method'),
			dataType: 'json',
			data: $userResendConfirmationForm.serialize(),
		})
		.done(function(data) {
			var message = _('Desculpe. Houve um erro ao solicitar o reenvio da confirmaÃ§Ã£o.');
			message = data.message && data.message.length ? data.message : message;
			if (! data || ! data.success) {
				toastr.error(message, 'Erro!');
				return;
			}
			toastr.success(message, 'Sucesso!');
			$userResendConfirmationForm.find('button[type="submit"]').prop('disabled', true);
			$userResendConfirmationForm.off('submit').on('submit', function() {
				toastr.info(_('Sua solicitaÃ§Ã£o jÃ¡ foi realizada. Por favor, verifique seu e-mail.'), 'InformaÃ§Ã£o');
			});
		})
		.fail(function() {
			var message = _('Desculpe. Houve um erro ao solicitar o reenvio da confirmaÃ§Ã£o servidor.');
			toastr.error(message, 'Erro!');
		})
		.always(function() {
			unblockUI();
		});
	});
}

///////////////////////////
// Progresso das SessÃµes //
///////////////////////////

var $sessionsProgress = $('#sessions-progress');
if ($sessionsProgress.length) {
	var $progressBar = $sessionsProgress.find('.progress-bar');
	var percentage = parseFloat($progressBar.attr('aria-valuenow'));
	if (percentage > 0 && percentage <= 100) {
		$(document).ready(function() {
			$({ counter: 0 }).animate({ counter: percentage }, {
				duration: 1000,
				step: function () {
					$progressBar.width(Math.ceil(this.counter) + '%');
				}
			});
		});
	}
}

//////////////////////
// UsuÃ¡rio de Teste //
//////////////////////
$('[data-toggle="job-test-user"], [data-toggle="link-test-user"], [data-toggle="file-test-user"]').on('click', function(event) {
	event.preventDefault();
	bootbox.alert('<div class="alert alert-warning"><i class="fas fa-fw fa-lock fa-3x pull-left"></i><p>' + _('Seu perfil Ã© de teste, para acessar todo o conteÃºdo oferecido pelo GENES, compre') + " <i onclick='showBuyPremiumModal();'>" + _('aqui') + "</i>" + '</p></div>');
});

////////////////////////////////
// Link para o Topo da PÃ¡gina //
////////////////////////////////
$('a[href="#anchor-top"]').on('click', function(event) {
	event.preventDefault();
	$('html, body').stop().animate({ scrollTop: $('#anchor-top').offset().top, }, 500);
});

///////////////////////////////////
// Link para os botÃµes das fases //
///////////////////////////////////
$('a[href="#buttons"]').on('click', function(event) {
	event.preventDefault();
	backToHome(event);
	openAreas();
	// $('html, body').stop().animate({ scrollTop: $('#buttons').offset().top - 50, }, 500);
});

// progressBar();

// function progressBar() {
// 	var	counter = $('#checklist-fase1').find('input[type=checkbox]:checked').length;
// 	var	total = $('#checklist-fase1').find('input[type=checkbox]').length;
// 	var	width = counter/total * 100 +'%';
// 	$(".progress .progress-bar.checklist1").css("width", width);

// 	counter = $('#checklist-fase2').find('input[type=checkbox]:checked').length;
// 	total = $('#checklist-fase1').find('input[type=checkbox]').length;
// 	width = counter/total * 100 +'%';
// 	$(".progress .progress-bar.checklist2").css("width", width);

// 	counter = $('#checklist-fase3').find('input[type=checkbox]:checked').length;
// 	total = $('#checklist-fase1').find('input[type=checkbox]').length;
// 	width = counter/total * 100 +'%';
// 	$(".progress .progress-bar.checklist3").css("width", width);
// }

// $("#checklist-fase1, #checklist-fase2, #checklist-fase3").on("change", "input:checkbox", function() {
// 	progressBar();
// 	var $this = $(this);
// 	var task_id = $this.attr("id");
// 	$.post("../task/checkTask", {"task_id":task_id}, function(data){
//     });
// });


//add checked icon when found-a-job-form is submitted
$("#modal-found-a-job form").on("submit", function () {
	$(".highlight-item.item-found-job").addClass('clicked');
	$(".highlight-item.item-found-job i:first").addClass("fas fa-check check");		
});


//saving progress
function apllyCheckEvents () {
	$("form.user_check").off();

	$("form.user_check").on("change", "input:checkbox", function() {
		var $this = $(this);
		var item_id = $this.attr("id");
		var area = $this.attr("value");
		var from_panel = $this.parents(".panel-heading")[0];

		var highlightLink = $("[data-area='" + area + "'][data-id='" + item_id + "'] ");
		var highlight = highlightLink.closest(".highlight-item");
		if(highlight.length) {
			if(!highlight.hasClass("clicked")) {
				highlight.addClass('clicked');
				$.post("../checkProgress/check", {"item_id":item_id, "area":area})
				.always(function() {
					$('#' + area + '-load').hide();
					unblockUI();
				});;
				fillCircle();
			}
		} else {
			$.post("../checkProgress/check", {"item_id":item_id, "area":area})
			.always(function() {
				$('#' + area + '-load').hide();
				unblockUI();
			});;
		}

		if(this.checked == true){
			from_panel.classList.add('checked-progress');

			var dado_from_banner = $(".num-dados-novos.margin-dados."+area);
			if(dado_from_banner.length > 0) dado_from_banner.text(parseInt(dado_from_banner.text())+1);
		}
		else {
			if(highlight.length){
				this.checked = true;

				var dado_from_banner = $(".num-dados-novos.margin-dados."+area);
				if(dado_from_banner.length) dado_from_banner.text(parseInt(dado_from_banner.text())+1);
			}
			else {
				from_panel.classList.remove('checked-progress');

				var dado_from_banner = $(".num-dados-novos.margin-dados."+area);
				if(dado_from_banner.length) dado_from_banner.text(parseInt(dado_from_banner.text())-1);
			}
		}
	});
}

apllyCheckEvents();

////////////////////////////////////////////////
// Salva visualizaÃ§Ã£o de conteÃºdo em destaque //
////////////////////////////////////////////////

$(".highlight-item a").on("click", function() {
	var highlight = $(this).closest('.highlight-item');
	if(highlight.hasClass('content-blocked') || highlight.find('a').first().attr('href') == "javascript:void(0);" || highlight.hasClass('test-user') && (highlight.find('a').first().attr('data-area') == "video" || highlight.find('a').first().attr('data-area') == "outplacement")) return true;

	var $this = $(this);
	var item_id = $this.attr("data-id");
	var area = $this.attr("data-area");

	var head = '#heading-' + area + '-' + item_id;
	var findOther = $(head)[0];
	if(findOther == undefined) {
	
		if(! highlight.hasClass("clicked")) { 
			$.post("../checkProgress/check", { "item_id": item_id, "area": area });
			fillCircle();
		}
	} else
	if(!findOther.classList.contains("checked-progress")) {
	
		findOther.classList.add('checked-progress');
		$.post("../checkProgress/check", { "item_id": item_id, "area": area });
		fillCircle();
	}

	var other = $this.attr("data-type");
	if(other !== undefined && findOther != undefined){
		//find the collapse and open it
		var collapse = '#collapse-' + area + '-' + item_id;
		var findCollapse = $(collapse);
		findCollapse.collapse("show");

		//se alguma aba estiver aberta, fecha
		var ativo = $('.tab-pane.fade.active.in');
		if(ativo.length) {
			ativo.removeClass('active');
			ativo.removeClass('in');
		}

		//abre aba do conteudo
		findCollapse.closest(".tab-pane.fade").addClass('active');
		findCollapse.closest(".tab-pane.fade").addClass('in');

		//scrolla atÃ© o conteÃºdo
		$('html, body').stop().animate({ scrollTop: $(head).offset().top, }, 1000);

		//scroll carousel until item is being shown
		var button = $("[aria-controls='" + area + "-tab']");
		if(button.length == 0) button = $("[aria-controls='" + area + "s-tab']");
		if(button.length > 0) {
			var item = button.last().closest(".owl-item");
      		if(item.length > 0) {
      			var next = 0;
      			while (!item.hasClass("active")) {
      				if(next++ < 30) $(".slider-tasks .owl-next").click();
      				else $(".slider-tasks .owl-prev").click();
      				if(next > 60) break;
      			}
      		}
		}
	}
});

///////////////////////////
// FormulÃ¡rio de Contato //
///////////////////////////

$('form.ajax').on('submit', function(event) {
	event.preventDefault();
	var $form = $(this);
	$form.find('[type="submit"]').prop('disabled', true);
	blockUI();
	$.ajax({
		url: $form.attr('action'),
		type: $form.attr('method'),
		dataType: 'json',
		data: $form.serialize(),
	})
	.done(function(data) {
		var message = _('Desculpe. Houve um erro ao enviar sua mensagem.');
		// NÃ£o houve retorno, ou retornou erro
		if (! data || ! data.success) {
			swal({
				title: _('Erro'),
				html: data && data.message && data.message.length ? data.message : message,
				type: 'error',
			}).then(function() {
				// OK
			}, function(dismiss) {
				// Dismiss
			});
			return;
		}
		$form.parents('.modal').modal('toggle');
		// Sucesso
		message = _('E-mail enviado com sucesso!');
		swal({
			title: _('Sucesso'),
			html: data && data.message && data.message.length ? data.message : message,
			type: 'success',
		}).then(function() {
			// OK
		}, function(dismiss) {
			// Dismiss
		});
		$form.get(0).reset();
		if (data.hasOwnProperty('redirect') && !! data.redirect) {
			setTimeout(function() { window.location.href = data.redirect; }, 3000);
		}
	})
	.fail(function() {
		swal({
			title: _('Erro'),
			html: _('Desculpe. Houve um erro ao enviar sua mensagem.'),
			type: 'error',
		}).then(function() {
			// OK
		}, function(dismiss) {
			// Dismiss
		});
	})
	.always(function() {
		$form.find('[type="submit"]').prop('disabled', false);
		unblockUI();
	});
});

////////////////////////
// Modal de OrÃ§amento //
////////////////////////

$('#product-contact-modal').on('show.bs.modal', function(event) {
	var $trigger = $(event.relatedTarget);
	var productId = 'undefined' !== typeof $trigger.attr('data-product') ? $trigger.attr('data-product') : '';
	var productName = 'undefined' !== typeof $trigger.attr('data-product-name') ? $trigger.attr('data-product-name') : '';
	var productPrice = 'undefined' !== typeof $trigger.attr('data-product-price') ? $trigger.attr('data-product-price') : '';
	$(this).find('input[name="product"]').val(productId);
	$(this).find('input[name="product_name"]').val(productName);
	$(this).find('input[name="product_price"]').val(productPrice);
});

$('#product-contact-modal').on('hide.bs.modal', function(event) {
	$(this).find('input[name="product"]').val('');
	$(this).find('input[name="product_name"]').val('');
	$(this).find('input[name="product_price"]').val('');
});

///////////////
// Pagamento //
///////////////

$('[data-trigger="approve-payment"]').on('click', function(event) {
	event.preventDefault();
	var $pane, product, $methodInput, method;
	$panel = $(this).closest('.panel');
	if (! $panel.length) {
		swal(_('Erro!'), _('Houve um erro ao processar a estrutura da pÃ¡gina.'), 'error');
		return false;
	}
	product = $panel.attr('data-product-id');
	if (! product || ! product.length) {
		swal(_('Erro!'), _('NÃ£o foi possÃ­vel determinar qual Ã© o produto/serviÃ§o.'), 'error');
		return false;
	}
	product = parseInt(product, 10);
	$methodInput = $panel.find('input[name="method"]:checked');
	if (! $methodInput.length) {
		swal(_('Erro!'), _('NÃ£o foi possÃ­vel determinar qual Ã© a forma de pagamento escolhida.'), 'error');
		return false;
	}
	method = $methodInput.val();
	blockUI();
	$.ajax({
		url: basePath + 'payment',
		type: 'POST',
		dataType: 'json',
		data: {id: product, method: method},
	})
	.done(function(data) {
		var message = _('Desculpe. Houve um erro ao obter o link para autorizar seu pagamento.');
		if (! data || ! data.success || ! data.url || ! data.url.length) {
			unblockUI();
			swal(_('Erro'), data.message && data.message.length ? data.message : message, 'error');
			return false;
		}
		window.location.href = data.url;
		return true;
	})
	.fail(function() {
		unblockUI();
		swal(_('Erro'), _('Houve um erro ao requisitar o servidor para aprovar seu pagamento.'), 'error');
		return false;
	});
});

///////////////////////
// Perfil do UsuÃ¡rio //
///////////////////////
var $profileForm = $('#user-data-form');
if ($profileForm.length) {
	if ('undefined' !== typeof $.fn.strength() && 'object' === typeof $.fn.strength()) {
		$profileForm.find('#password').strength({
			strengthClass: 'strength',
			strengthMeterClass: 'strength_meter',
			strengthButtonClass: 'button_strength',
			strengthButtonText: '',
			strengthButtonTextToggle: ''
		});
	}

	// Valida o formulÃ¡rio
	$profileForm.validate({
		errorElement: 'span',
		errorClass: 'help-block',
		focusInvalid: false,
		ignore: '.no-validate, :hidden',
		rules: {
			name: {
				minlength: 2,
				maxlength: 255,
				fullname: true,
			},
			email: {
				required: true,
				remote: {
					param: {
						url: basePath + 'profile/validate',
						data: {
							email: this.value,
						}
					},
				},
			},
			"user_target_areas[]": {
				required: true,
				minlength: 1,
			},
			"user_target_markets[]": {
				required: true,
				minlength: 1,
			},
			current_country: {
				required: true,
			},
			"user_countries[]" : {
				required: true,
				minlength: 1,
			},
			
		},
		invalidHandler: function (e, validator) {
			var message = '<p>' + _('HÃ¡ problemas de validaÃ§Ã£o no formulÃ¡rio. Verifique os campos');
			if (validator.errorList && validator.errorList.length) {
				message += ':</p>';
				message += '<ul class="list-unstyled">';
				$(validator.errorList).each(function () {
					var $el = $(this.element);
					var $group = $el.closest('.form-group');
					var $label = $group.find('label').first();
					$label = $label.clone();
					$label.find('span').remove();
					var label = $.trim($label.text());
					var $tab = $group.closest('.tab-pane');
					var $tabLink = $('a[data-toggle="tab"][href$="#' + $tab.attr('id') + '"]');
					var tabLabel = $.trim($tabLink.text());
					message += '<li>';
					message += (label && label.length ? '<strong>' + label + ':</strong> ' : '') + this.message + (tabLabel && tabLabel.length ? ' (' + _('Aba') + ' "' + tabLabel + '")' : '');
					message += '</li>';
				});
				message += '</ul>';
			} else {
				message += '.</p>';
			}
			swal(_('Erro'), message, 'error').then(function() {
				// ApÃ³s clique no OK
			}, function(dismiss) {
				// Ao dispensar a modal
			});
		},
		errorPlacement: function (error, element) {
			var $icon = $(element).parent().find('label i');
			$icon.removeClass('fa-check').addClass("fa-warning");
			$icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
		},
		highlight: function (element) {
			$(element)
				.closest('.form-group').removeClass("has-success").addClass('has-error');
		},
		unhighlight: function () {},
		success: function (label, element) {
			var $icon = $(element).parent().find('label i');
			$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
			$icon.removeClass("fa-warning").addClass("fa-check");
		},
		submitHandler: function (form) {
			var $form = $(form);
			$form.find('button[type=submit]').prop('disabled', true);
			blockUI();
			$form.ajaxSubmit({
				dataType: 'json',
				url: $form.prop('action'),
				success: function (data) {
					if (true === data.success) {
						swal({
							'title'	:_('Sucesso'),
							'html'	: data.message,
							'type'	: 'success',
						}).then(function () {
							window.location.href = basePath;
						});
						return true;
					} else {
						swal(_('Erro'), data.message, 'error');
					}
				},
				error: function() {
					swal(_('Erro'), _('Erro ao tentar gravar dados!'), 'error');
				},
				complete: function() {
					unblockUI();
					$form.find('button[type=submit]').prop('disabled', false);
				}
			});
			return false;
		},
	});
}

$('#contract[type="checkbox"]').on('change', function() {
	var checked = $(this).is(':checked');
	if (! checked) $('[data-trigger="approve-payment"]').prop('disabled', true);
	else $('[data-trigger="approve-payment"]').prop('disabled', false);
});

///////////////////////////
// IndicaÃ§Ã£o de Contatos //
///////////////////////////

var $indicationForm = $('#modal-add-contact form');
if ($indicationForm.length) {
	// Valida o formulÃ¡rio
	$indicationForm.validate({
		errorElement: 'span',
		errorClass: 'help-block',
		focusInvalid: false,
		ignore: '.no-validate, :hidden',
		rules: {
			name: {
				minlength: 2,
				maxlength: 255,
				fullname: true,
			},
			email: {
				remote: {
					param: {
						url: basePath + 'indication/validate',
						data: {
							email: this.value,
						}
					},
				},
			},
		},
		invalidHandler: function (e, validator) {
			var message = '<p>' + _('HÃ¡ problemas de validaÃ§Ã£o no formulÃ¡rio. Verifique os campos');
			if (validator.errorList && validator.errorList.length) {
				message += ':</p>';
				message += '<ul class="list-unstyled">';
				$(validator.errorList).each(function () {
					var $el = $(this.element);
					var $group = $el.closest('.form-group');
					var $label = $group.find('label').first();
					$label = $label.clone();
					$label.find('span').remove();
					var label = $.trim($label.text());
					label = label.replace(' *', '');
					message += '<li>';
					message += (label && label.length ? '<strong>' + label + ':</strong> ' : '') + this.message;
					message += '</li>';
				});
				message += '</ul>';
			} else {
				message += '.</p>';
			}
			swal(_('Erro'), message, 'error').then(function() {
				// ApÃ³s clique no OK
			}, function(dismiss) {
				// Ao dispensar a modal
			});
		},
		errorPlacement: function (error, element) {
			var $icon = $(element).parent().find('label i');
			$icon.removeClass('fa-check').addClass("fa-warning");
			$icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
		},
		highlight: function (element) {
			$(element)
				.closest('.form-group').removeClass("has-success").addClass('has-error');
		},
		unhighlight: function () {},
		success: function (label, element) {
			var $icon = $(element).parent().find('label i');
			$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
			$icon.removeClass("fa-warning").addClass("fa-check");
		},
		submitHandler: function (form) {
			var $form = $(form);
			$form.find('button[type=submit]').prop('disabled', true);
			blockUI();
			$form.ajaxSubmit({
				dataType: 'json',
				url: $form.prop('action'),
				success: function (data) {
					var $template = $($('#indication-template').html());
					if (! data || ! data.success) {
						swal(_('Erro'), data.message, 'error');
						return;
					}
					$(data.indications).each(function() {
						var $indication = $template.clone();
						var fields = [
							'name',
							'company',
							'position',
							'area',
							'market',
							'country',
						];
						for (var i = 0, l = fields.length; i < l; i++) {
							if (this[fields[i]] && this[fields[i]].length) {
								$indication.find('.indication-' + fields[i]).html(this[fields[i]]);
							} else {
								$indication.find('.indication-' + fields[i]).remove();
							}
						}
						if (this.email && this.email.length) {
							$indication.find('.indication-email').html('<a href="mailto:' + this.email + '">' + this.email + '</a>');
						} else {
							$indication.find('.indication-email').remove();
						}
						if (this.phone && this.phone.length) {
							$indication.find('.indication-phone').html('<a href="tel:' + this.phone.replace(/[^0-9]/, '') + '">' + this.phone + '</a>');
						} else {
							$indication.find('.indication-phone').remove();
						}
						$indication.appendTo('#indications-inbox');
						$('#indications-inbox').next('.alert').remove();
					});
					swal({
						'title'	:_('Sucesso'),
						'html'	: data.message,
						'type'	: 'success',
					}).then(function () {
						$form.get(0).reset();
						$form.closest('.modal').modal('hide');
					});
				},
				error: function() {
					swal(_('Erro'), _('Erro ao tentar gravar dados!'), 'error');
				},
				complete: function() {
					unblockUI();
					$form.find('button[type=submit]').prop('disabled', false);
				}
			});
			return false;
		},
	});
}

///////////
// FÃ³rum //
///////////
function getForumThreads()
{
	if ($('#thread-list li').length) return;
	$('#thread-list').load(basePath + 'forum/topics');
}
$('[href$="#forum-tab"][data-toggle="tab"]').on('shown.bs.tab', function() {
	$('.sub-areas').addClass('hide');
	getForumThreads();
});
// Links da paginaÃ§Ã£o de tÃ³picos
$('#forum-wrapper').on('click', '#thread-pagination .pagination a', function(event) {
	event.preventDefault();
	var url = $(this).attr('href');
	$('#thread-list').empty().append('<img src="dna/img/loading-spinner-grey.gif" alt="' + _('Carregando') + '&hellip;"><p class="text-center">' + _('Carregando') + '&hellip;</p>');
	$('#thread-list').load(url);
});
// Exibindo mensagens do tÃ³pico
$('#forum-wrapper').on('click', '.list-group-item-heading a', function(event) {
	event.preventDefault();
	var url = $(this).attr('href');
	$('#message-list').empty().append('<img src="dna/img/loading-spinner-grey.gif" alt="' + _('Carregando') + '&hellip;"><p class="text-center">' + _('Carregando') + '&hellip;</p>');
	$('#panel-collapse-threads').collapse('hide');
	$('#panel-collapse-messages').collapse('show');
	$('#message-list').load(url);
});
// Links da paginaÃ§Ã£o de mensagens
$('#forum-wrapper').on('click', '#message-list .pagination a', function(event) {
	event.preventDefault();
	$('#message-list').empty().append('<img src="dna/img/loading-spinner-grey.gif" alt="' + _('Carregando') + '&hellip;"><p class="text-center">' + _('Carregando') + '&hellip;</p>');
	var url = $(this).attr('href');
	$('#message-list').load(url);
});
// BotÃ£o de volta aos tÃ³picos
$('#forum-wrapper').on('click', '#btn-show-threads', function(event) {
	event.preventDefault();
	$('#panel-collapse-threads').collapse('show');
	$('#panel-collapse-messages').collapse('hide');
});
// FormulÃ¡rio para cadastro de novas mensagens
$('#forum-wrapper').on('submit', '#forum-post-form, .forum-reply-form', function(event) {
	event.preventDefault();
	var $form = $(this);
	$.ajax({
		url			: $form.attr('action'),
		type		: $form.attr('method'),
		dataType	: 'json',
		data		: $form.serialize(),
	})
	.done(function(data) {
		var message = _('Desculpe. Houve um erro ao registrar sua mensagem.');
		message = data && data.message && data.message.length ? data.message : message;
		if (! data || ! data.success) {
			swal(_('Erro'), message, 'error');
			return;
		}
		swal(_('Sucesso'), message, 'success');
		$form.closest('.modal').modal('hide');
		$form.get(0).reset();
		if (data.reload && ! $form.hasClass('forum-reply-form')) {
			$('#thread-list').empty().append('<img src="dna/img/loading-spinner-grey.gif" alt="' + _('Carregando') + '&hellip;"><p class="text-center">' + _('Carregando') + '&hellip;</p>');
			$('#thread-list').load(basePath + 'forum/topics');
		} else if (data.reload && data.url) {
			$('#message-list').empty().append('<img src="dna/img/loading-spinner-grey.gif" alt="' + _('Carregando') + '&hellip;"><p class="text-center">' + _('Carregando') + '&hellip;</p>');
			$('#message-list').load(data.url);
		}
	})
	.fail(function() {
		var message = _('Desculpe. Houve um erro ao registrar sua mensagem.');
		swal(_('Erro'), message, 'error');
	});
});
// Cancela assinatura de um tÃ³pico
$('#forum-wrapper').on('click', '[data-forum-subscription-cancellation]', function(event) {
	event.preventDefault();
	var id = $(this).attr('data-forum-subscription-cancellation');
	blockUI();
	$.ajax({
		url			: basePath + 'forum/cancel/' + id,
		type		: 'get',
		dataType	: 'json',
	})
	.done(function(data) {
		var message = _('Desculpe. Houve um erro ao cancelar notificaÃ§Ãµes para este tÃ³pico.');
		if (! data || ! data.success) {
			message = data && data.message && data.message.length ? data.message : message;
			swal(_('Erro'), message, 'error');
			return;
		}
		swal(_('Sucesso'), data.message, 'success');
		$('#subscription-status .is-subscribed').hide();
		$('#subscription-status .not-subscribed').show();
	})
	.fail(function() {
		var message = _('Desculpe. Houve um erro ao cancelar notificaÃ§Ãµes para este tÃ³pico.');
	})
	.always(function() {
		unblockUI();
	});
});

/////////////////////////////////////
// Upload de Arquivos (Minha Ãrea) //
/////////////////////////////////////
// Modal de upload
$('#my-files-upload-button').on('click', function(event) {
	event.preventDefault();
	$('#my-file-upload').modal('show');
});

// Expande o painel de arquivos pela primeira vez
$('#my-files-panel').on('show.bs.collapse', function() {
	if ($('#my-files-panel .loading').length) {
		$('#user-files-list').load(basePath + 'files/getFiles', function() {
			$('#my-files-panel .loading').fadeOut('fast', function() {
				$(this).remove();
			});
		});
	}
});

// Envio do arquivo
var $myFileUploadForm = $('#my-file-upload form');
if ($myFileUploadForm.length) {
	$myFileUploadForm.on('submit', function(event) {
		event.preventDefault();
		$myFileUploadForm.find('button[type=submit]').prop('disabled', true);
		blockUI();
		$myFileUploadForm.ajaxSubmit({
			dataType: 'json',
			url: $myFileUploadForm.prop('action'),
			success: function (data) {
				var message = _('Desculpe. Houve um erro ao enviar seu arquivo.');
				message = data && data.message && data.message.length ? data.message : message;
				if (! data || ! data.success) {
					swal(_('Erro'), message, 'error');
					return;
				}
				swal({
					'title'	:_('Sucesso'),
					'html'	: data.message,
					'type'	: 'success',
				});
				// Adicionar markup
				$('#user-files-list').append(data.markup);
				// Limpar e esconder modal
				$myFileUploadForm.get(0).reset();
				$myFileUploadForm.closest('.modal').modal('hide');
			},
			error: function() {
				var message = _('Desculpe. Houve um erro ao enviar seu arquivo.');
				swal(_('Erro'), message, 'error');
			},
			complete: function() {
				unblockUI();
				$myFileUploadForm.find('button[type=submit]').prop('disabled', false);
			}
		});
	});
}

// Renomear arquivo
$('#user-files-list').on('click', '[data-trigger="rename"]', function(event) {
	event.preventDefault();
	var id = parseInt($(this).closest('.user-file-item').attr('data-id'), 10);
	var name = $(this).closest('.user-file-item').attr('data-name');
	$('#my-file-rename').find('input[name="id"]').val(id);
	$('#my-file-rename').find('input[name="name"]').val(name);
	$('#my-file-rename').modal('show');
});
var $myFileRenameForm = $('#my-file-rename form');
if ($myFileRenameForm.length) {
	$myFileRenameForm.on('submit', function(event) {
		event.preventDefault();
		$myFileRenameForm.find('button[type=submit]').prop('disabled', true);
		blockUI();
		$.ajax({
			url:		$myFileRenameForm.attr('action'),
			type:		$myFileRenameForm.attr('method'),
			dataType:	'json',
			data:		$myFileRenameForm.serialize(),
		})
		.done(function(data) {
			var message = _('Desculpe. Houve um erro ao enviar seu arquivo.');
			message = data && data.message && data.message.length ? data.message : message;
			if (! data || ! data.success) {
				swal(_('Erro'), message, 'error');
				return;
			}
			// Localiza o markup original e substitui pelo novo
			$('#user-files-list').find('.user-file-item[data-id="' + data.file.id + '"]').parent().replaceWith(data.markup);
			// Limpar e esconder modal
			$myFileRenameForm.get(0).reset();
			$myFileRenameForm.closest('.modal').modal('hide');
		})
		.fail(function() {
			var message = _('Desculpe. Houve um erro ao renomear seu arquivo.');
			swal(_('Erro'), message, 'error');
		})
		.always(function() {
			unblockUI();
			$myFileRenameForm.find('button[type=submit]').prop('disabled', false);
		});
	});
}

// Excluir arquivo
$('#user-files-list').on('click', '[data-trigger="delete"]', function(event) {
	event.preventDefault();
	var id = parseInt($(this).closest('.user-file-item').attr('data-id'), 10);
	bootbox.confirm(_('Tem certeza que deseja excluir este arquivo?') + ' <b>' + _('NÃ£o Ã© possÃ­vel desfazer essa aÃ§Ã£o!') + '</b>', function(result) {
		if (result === true) {
			blockUI();
			$.ajax({
				url:		basePath + 'files/delete',
				type:		'DELETE',
				dataType:	'json',
				data:		{
					id:		id,
				},
			})
			.done(function(data) {
				var message = _('Desculpe. Houve um erro ao enviar seu arquivo.');
				message = data && data.message && data.message.length ? data.message : message;
				if (! data || ! data.success) {
					swal(_('Erro'), message, 'error');
					return;
				}
				// Localiza o markup do arquivo e remove
				$('#user-files-list .user-file-item[data-id="' + id + '"]').parent().fadeOut('fast', function() {
					$(this).remove();
				});
			})
			.fail(function() {
				var message = _('Desculpe. Houve um erro ao excluir seu arquivo.');
				swal(_('Erro'), message, 'error');
			})
			.always(function() {
				unblockUI();
			});
		}
	});
});

////////////////////
// Meus Processos //
////////////////////
var $myInterview = $('#my-interview');
var $myInterviewForm = $myInterview.find('form');
if ($myInterview.length || $myInterviewForm.length) {
	// Expande o painel de processos pela primeira vez
	$('#my-processes-panel').on('show.bs.collapse', function() {
		if ($('#my-processes-panel .loading').length) {
			$('#interview-list').load(basePath + 'interview/getInterviews', function() {
				$('#interview-list [title]').tooltip({
					container	: 'body',
					html		: true,
					placement	: 'top',
					trigger		: 'hover focus',
				});
				$('#my-processes-panel .loading').fadeOut('fast', function() {
					$(this).remove();
				});
			});
		}
	});

	// Adiciona um novo processo
	$('#my-processes-panel').on('click', '[data-trigger="add-interview"]', function(event) {
		event.preventDefault();
		var id = $(this).attr('data-id');
		id = 'undefined' !== typeof id ? parseInt(id, 10) : '';
		$myInterview.find('input[name="id"]').val(id);
		if (id) {
			// Pegar dados da vaga
		}
		$myInterview.modal('show');
	});

	// Edita um processo
	$('#my-processes-panel').on('click', '[data-trigger="edit-interview"]', function(event) {
		event.preventDefault();
		var id = parseInt($(this).closest('.list-group-item[data-id]').attr('data-id'), 10);
		blockUI();
		$.ajax({
			url:		basePath + 'interview/getInterviewData/' + id,
			type:		'get',
			dataType:	'json',
		})
		.done(function(data) {
			var message = _('Desculpe. Houve um erro ao obter os dados do processo solicitado.');
			message = data && data.message && data.message.length ? data.message : message;
			if (! data || ! data.success) {
				swal(_('Erro!', message, 'error'));
				return;
			}
			$('#my-interview form [name]').each(function() {
				var name = $(this).attr('name');
				if (data.interview.hasOwnProperty(name) && data.interview[name]) {
					$(this).val(data.interview[name]).change();
				}
			});
			$('#my-interview').modal('show').on('hidden.bs.modal', function() {
				$(this).find('form').get(0).reset();
				$(this).find('form input[name="id"]').val('');
			});
		})
		.fail(function() {
			var message = _('Desculpe. Houve um erro ao obter os dados do processo solicitado.');
			swal(_('Erro!', message, 'error'));
		})
		.always(function() {
			unblockUI();
		});
	});

	$('#my-processes-panel').on('click', '[data-trigger="archive-interview"]', function(event) {
		event.preventDefault();
		var $group = $(this).closest('.list-group-item[data-id]');
		var id = parseInt($group.attr('data-id'), 10);
		blockUI();
		$.ajax({
			url:		basePath + 'interview/archive',
			type:		'post',
			dataType:	'json',
			data:		{
				id: id,
			},
		})
		.done(function(data) {
			var message = _('Desculpe. Houve um erro ao arquivar o processo solicitado.');
			message = data && data.message && data.message.length ? data.message : message;
			if (! data || ! data.success) {
				swal(_('Erro!', message, 'error'));
				return;
			}
			$group.find('[title]').tooltip('hide');
			$group.fadeOut('fast', function() {
				$(this).remove();
			});
		})
		.fail(function() {
			var message = _('Desculpe. Houve um erro ao arquivar o processo solicitado.');
			swal(_('Erro!', message, 'error'));
		})
		.always(function() {
			unblockUI();
		});
	});

	// Envio do form
	$myInterviewForm.on('submit', function(event) {
		$myInterviewForm.find('button[type="submit"]').prop('disabled', true);
		event.preventDefault();
		blockUI();
		$.ajax({
			url:		$myInterviewForm.attr('action'),
			type:		$myInterviewForm.attr('method'),
			dataType:	'json',
			data:		$myInterviewForm.serialize(),
		})
		.done(function(data) {
			var message = _('Desculpe. Houve um erro ao gravar os dados.');
			message = data && data.message && data.message.length ? data.message : message;
			if (! data || ! data.success) {
				swal(_('Erro'), message, 'error');
				return
			}
			if ($('#interview-list .list-group-item[data-id="' + data.interview.id + '"]').length) {
				$('#interview-list .list-group-item[data-id="' + data.interview.id + '"]').replaceWith(data.markup);
			} else {
				$('#interview-list').append(data.markup);
			}
			$myInterview.modal('hide');
			$myInterviewForm.get(0).reset();
			$('html, body').animate({ scrollTop: $('#interview-list .list-group-item[data-id="' + data.interview.id + '"]').offset().top, }, 500);
		})
		.fail(function() {
			var message = _('Desculpe. Houve um erro ao gravar os dados.');
			swal(_('Erro'), message, 'error');
		})
		.always(function() {
			$myInterviewForm.find('button[type="submit"]').prop('disabled', false);
			unblockUI();
		});
	});
}

function openTabContent(tabName) {
	var countries = '';
	tabWrapper = $('#' + tabName + '-wrapper');
	if ( tabWrapper.children('img').length ) {
		countries = tabWrapper.attr('data-countries');
		sectionTab = $('#' + tabName + '-tab');
		if(sectionTab.attr('data-dynamic')=='yes') {
			path = basePath + 'dynamic/content'; 
			params = { countries: countries, tab: tabName};
		}
		else { 
			path = basePath + tabName + '/content'; 
			params = { countries: countries};
		}
		$('#' + tabName + '-content', sectionTab).load(path, params, function() {
			tabWrapper = $(this).parent();
			tabWrapper.children(':not(.panel-group)').hide().remove();
			checkUserLoggedIn();

			iframeDivs = $(this).find('.panel-default .embed-responsive');
			iframeDivs.each(function() {
				a = $(this).closest('.panel-collapse').siblings('.panel-heading').find('a');
				input = $(this).siblings('input');
				iframe = $(this).children('iframe');
				a.click(function() {
					div = $(this).closest('.panel-heading').siblings('.panel-collapse').find('.panel-body');
					input = div.children('input');
					iframe = div.find('iframe');
					if(activeIframe != null && activeIframe != iframe)
						activeIframe.attr('src', '');

					if(iframe.attr('src')!=input.val())
						iframe.attr('src', input.val());
					
					activeIframe = iframe;
				});
			});
			apllyCheckEvents();
		});
	}
}

$('[href$="-tab"][data-toggle="tab"]').on('shown.bs.tab', function() {
	$('.sub-areas').addClass('hide');
	tabName = $(this).attr("href");
	if(tabName.indexOf('/')==0) {
		tabName = tabName.substring(2, tabName.lastIndexOf('-'));
	} 
	else {
		tabName = tabName.substring(1, tabName.lastIndexOf('-'));
	}

	tabWrapper = $('#' + tabName + '-wrapper');
	modal = $('#modal-' + tabName);
	// var countries = '';	

	checkUserLoggedIn();

	if(modal.length) modal.modal('show');
	if(tabName=='jobs' || tabName=='descriptions' || tabName=='linkedin' || tabName=='headhunters' || tabName=='recruiters') {
		offset = 0;
		limit = 10;
		total = 0;
		page = 1;
		pages = 0;

		loadItems(tabName, { countries: tabWrapper.attr('data-countries'), skip: offset, search: searchText }, { checked: true, countries: null, skip: offset, search: searchText });
		return;
	}
	openTabContent(tabName);
});

function expireJob(job_id = null){
	$('#job-sending-'+job_id).removeClass('hide');
	$('#job-alerting-'+job_id).addClass('hide');
	$.post("../jobs/expired", { "job_id": job_id}, function() {
		$('#job-sending-'+job_id).addClass('hide');
		$('#job-expired-'+job_id).removeClass('hide');
	});
};

$('#jobsSearch').on('keyup', function() {
	clearTimeout(typingTimer);
	$input = $(this);
	typingTimer = setTimeout(doneJobs, doneTypingInterval);
});

$('#jobsSearch').on('keydown', function () {
	clearTimeout(typingTimer);
});

function doneJobs() {
	searchText = $input.val();
	loadItems('jobs', { countries: $('#jobs-wrapper').attr('data-countries'), skip: offset, search: searchText }, { checked: true, countries: null, skip: offset, search: searchText });
}

$('#descriptionSearch').on('keyup', function() {
	clearTimeout(typingTimer);
	$input = $(this);
	typingTimer = setTimeout(doneDescriptions, doneTypingInterval);
});

$('#descriptionSearch').on('keydown', function () {
	clearTimeout(typingTimer);
});

function doneDescriptions() {
	searchText = $input.val();
	loadItems('descriptions', { countries: $('#descriptions-wrapper').attr('data-countries'), skip: offset, search: searchText }, { checked: true, countries: null, skip: offset, search: searchText });
}

$('[href$="-tab"][data-toggle="tab"]').on('shown.bs.tab', function() {
	$('.sub-areas').addClass('hide');
	$id = $(this).attr('href');
	$id = $id.replace('/', '');
	$($id).removeClass('hide');
});

$('#user-tasks').click(function(event) {
	var element = event.target;
	element = element.closest('a');
	// if (element.getAttribute('href') !== '/#company-users-tab')
	// 	$('#itens-menu').addClass('hide');
});

/////////////////////
// Empregabilidade //
/////////////////////
$("#msform").submit(function(e){
    e.preventDefault();
});

var $empregForm = $("#msform")
if ($empregForm.length) {

	// Valida o formulÃ¡rio
	$empregForm.validate({
		errorElement: 'span',
		errorClass: 'help-block',
		focusInvalid: false,
		ignore: '.no-validate, :hidden',
		rules: {
		},
		invalidHandler: function (e, validator) {
			var message = '<p>' + _('HÃ¡ problemas de validaÃ§Ã£o no formulÃ¡rio. Verifique os campos');
			if (validator.errorList && validator.errorList.length) {
				message += ':</p>';
				message += '<ul class="list-unstyled">';
				$(validator.errorList).each(function () {
					var $el = $(this.element);
					var $group = $el.closest('.form-group');
					var $label = $group.find('label').first();
					$label = $label.clone();
					$label.find('span').remove();
					var label = $.trim($label.text());
					var $tab = $group.closest('.tab-pane');
					var $tabLink = $('a[data-toggle="tab"][href$="#' + $tab.attr('id') + '"]');
					var tabLabel = $.trim($tabLink.text());
					message += '<li>';
					message += (label && label.length ? '<strong>' + label + ':</strong> ' : '') + this.message;
					message += '</li>';
				});
				message += '</ul>';
			} else {
				message += '.</p>';
			}
			swal(_('Erro'), message, 'error').then(function() {
				// ApÃ³s clique no OK
			}, function(dismiss) {
				// Ao dispensar a modal
			});
		},
		errorPlacement: function (error, element) {
			var $icon = $(element).parent().find('label i');
			$icon.removeClass('fa-check').addClass("fa-warning");
			$icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
		},
		highlight: function (element) {
			$(element)
				.closest('.form-group').removeClass("has-success").addClass('has-error');
		},
		unhighlight: function () {},
		success: function (label, element) {
			var $icon = $(element).parent().find('label i');
			$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
			$icon.removeClass("fa-warning").addClass("fa-check");
		},
		submitHandler: function (form) {
			var $form = $(form);
			$form.find('button[type=submit]').prop('disabled', true);
			blockUI();
			$form.ajaxSubmit({
				dataType: 'json',
				url: $form.prop('action'),
				success: function (data) {
					if (true === data.success) {
						$.post(
							'../contact/analiseEmpregabilidade',
							data,
							null,
							'json'
						).fail(function() {
							swal(_('Erro'), _('Erro ao enviar para o time do genes!'), 'error');
						});
						swal( _('Sucesso'), String(data.message), 'success');
						return true;
					} else {
						swal(_('Erro'), data.message, 'error');
					}
				},
				error: function() {
					swal(_('Erro'), _('Erro ao tentar gerar analise!'), 'error');
				},
				complete: function() {
					unblockUI();
					$form.find('button[type=submit]').prop('disabled', false);
				}
			});
			return false;
		},
	});
}

/////////////////
// Tradutores  //
/////////////////
// Envio do arquivo
var $myCvUploadForm = $('#cv-upload form');
if ($myCvUploadForm.length) {
	$myCvUploadForm.on('submit', function(event) {
		event.preventDefault();
		if($('div.checkbox-group.required :checkbox:checked').length > 0) {
			$myCvUploadForm.find('button[type=submit]').prop('disabled', true);
			blockUI();
			$myCvUploadForm.ajaxSubmit({
				dataType: 'json',
				url: $myCvUploadForm.prop('action'),
				success: function (data) {
					var message = _('Desculpe. Houve um erro ao enviar seu arquivo.');
					message = data && data.message && data.message.length ? data.message : message;
					if (! data || ! data.success) {
						swal(_('Erro'), message, 'error');
						return;
					}
					swal({
						'title'	:_('Sucesso'),
						'html'	: data.message,
						'type'	: 'success',
					});
					// Limpar e esconder modal
					$myCvUploadForm.get(0).reset();
				},
				error: function() {
					var message = _('Desculpe. Houve um erro ao enviar seu arquivo.');
					swal(_('Erro'), message, 'error');
				},
				complete: function() {
					unblockUI();
					$myCvUploadForm.find('button[type=submit]').prop('disabled', false);
				}
			});
		} else {
			swal(_('Erro'), _('Selecione ao menos uma lÃ­ngua para traduzir seu CV'), 'error');
		}
	});
}

$('#linkedinSearch').on('keyup', function() {
	clearTimeout(typingTimer);
	$input = $(this);
	typingTimer = setTimeout(doneLinkedin, doneTypingInterval);
});

$('#linkedinSearch').on('keydown', function () {
	clearTimeout(typingTimer);
});

function doneLinkedin() {
	searchText = $input.val();
	loadItems('linkedin', { skip: offset, search: searchText }, { checked: true, skip: offset, search: searchText });
}

$('#linkedin-upload-button').on('click', function(event) {
	event.preventDefault();
	$('#linkedin-file-upload').modal('show');
});

// Envio do arquivo
var $linkedinForm = $('#linkedin-file-upload form');
if ($linkedinForm.length) {
	$linkedinForm.on('submit', function(event) {
		event.preventDefault();
		blockUI();
		$linkedinForm.ajaxSubmit({
			beforeSubmit: function() {
				$linkedinForm.find('[type="submit"], [type="file"]').prop('disabled', true);
				blockUI();
				return true;
			},
			dataType:	'json',
			url: $linkedinForm.prop('action'),
			success: function (data) {
				var message = _('Desculpe. Houve um erro ao enviar seu arquivo.');
				message = data && data.message && data.message.length ? data.message : message;
				if (! data || ! data.success) {
					swal(_('Erro'), message, 'error');
					return;
				}
				swal({
					'title'	:_('Sucesso'),
					'html'	: data.message,
					'type'	: 'success',
				});
				// Adicionar markup
				$('#user-files-list').append(data.markup);
				// Limpar e esconder modal
				$linkedinForm.get(0).reset();
			},
			error: function() {
				var message = _('Desculpe. Houve um erro ao enviar seu arquivo.');
				swal(_('Erro'), message, 'error');
			},
			complete: function() {
				unblockUI();
				$linkedinForm.find('[type="submit"], [type="file"]').prop('disabled', false);
				$linkedinForm.closest('.modal').modal('hide');
				loadItems('linkedin', { skip: offset, search: searchText }, { checked: true, skip: offset, search: searchText });
			}
		});
	});
}




//////////////
//  Genes   //
//////////////
var offset = 0,
	limit = 10,
	total = 0,
	page = 1,
	pages = 0,
	typingTimer,
	doneTypingInterval = 1000,
	$input,
	searchText;

function nextPage(num, area, data, data2) {

	blockUI();

	if (num == 0 && page > 1) {
		page = page - 1;
	} else {
		if (num < 0) {
			page = page + 1;
		} else {
			if (num == 0) {
				page = 1;
			} else {
				page = num;
			}
		}
	}

	offset = (page * 10) - 10;
	data.skip = offset;
	data2.skip = offset;

	loadItems(area, data, data2);
}

function moveItem(area, request1, request2) {

	$("form.user_check").on("change", "input:checkbox", function() {

		blockUI();

		var $this = $(this);

		// if ((area[area.length-1]) == 's')
		// 	panelArea = '.panel-' + area.slice(0, area.length-1);
		// else
		switch(area) {
			case 'jobs':
				panelArea = '.panel-job';
				break;
			case 'descriptions':
				panelArea = '.panel-job';
				break;
			default:
				panelArea = '.panel-' + area;
				break;
		}

		var from_panel = $this.parents(panelArea)[0];
		var to_area;

		if($this.parents('#' + area + '-content').length)
			to_area = $('#' + area + '-checked-content')[0];

		if($this.parents('#' + area + '-checked-content').length)
			to_area = $('#' + area + '-content')[0];

		to_area.appendChild(from_panel);

		loadItems(area, request1, request2);
	});
}

function loadItems(area, request1, request2) {;

	checkUserLoggedIn();

	$.post(basePath + area + '/content', request1)
	.done(function(data) {

		$('#' + area + '-content').html(data);
		offset = parseInt($('#' + area + '-offset').val());
		limit = parseInt($('#' + area + '-limit').val());
		total = parseInt($('#' + area + '-total').val());

		pages = ( area == 'headhunters' || area == 'recruiters' ) ? Math.ceil((total / 25)) : Math.ceil((total / 10));

		apllyCheckEvents();
		moveItem(area, request1, request2);

		if($('#' + area + '-pagination').data("twbs-pagination")) {
			$('#' + area + '-pagination').twbsPagination('destroy');
		}

		if (pages >= 1 && page >= 1) {

			$('#' + area + '-pagination').twbsPagination({
				initiateStartPageClick: false,
				startPage: page,
				totalPages: pages,
				visiblePages: 5,
				first: _("Primeira"),
				prev: _("Anterior"),
				next: _("Próxima"),
				last: _("Última"),
				onPageClick: function (event, page) {
					nextPage(page, area, request1, request2);
				},
			});
		}
	})
	/*.fail(function() {

		$('#' + area + '-content').html('<div class="alert alert-danger">' + _('Ocorreu um erro ao carregar o conteÃºdo.') + '</div>');
	})
	.always(function() {
		$('#' + area + '-load').hide();
		unblockUI();
	});

	// Carrega conteudo da direita
	$.post(basePath + area + '/content', request2)
	.done(function(data) {

		$('#' + area + '-checked-content').html(data);

		apllyCheckEvents();
		moveItem(area, request1, request2);
		checkUserLoggedIn();
	})
	.fail(function() {

		$('#' + area + '-checked-content').html('<div class="alert alert-danger">' + _('Ocorreu um erro ao carregar o conteÃºdo.') + '</div>');
	})
	.always(function() {

		$('#' + area + '-checked-load').hide();
	});*/
}

function chatBot () {
	var iframe = $("#iframe-chat-bot");
	if (iframe.css("display") == 'none') {
    iframe.show();
    $("#chat-bot-open").hide();
	} else {
		$("#chat-bot-open").show();
		iframe.hide();
	}
}

function fixCircleColor() {
	$(".c100").each(function($index) {
		$percentage = $(this).find("span").text().replace("%", "");
		if ($percentage > 50) {
			if ($index == 0)
				$(this).find(".slice .fill").css("border", "0.08em solid #5259c5");
			if ($index == 1)
				$(this).find(".slice .fill").css("border", "0.08em solid #3480dc");
			if ($index == 2)
				$(this).find(".slice .fill").css("border", "0.08em solid #15a3a1");
		}
	});
}

function fillCircle() {

	var num = -1;
	if($(".box-fases.cor1.ativo").length) num = 0;
	if($(".box-fases.cor2.ativo").length) num = 1;
	if($(".box-fases.cor3.ativo").length) num = 2;

	var circle = $(".c100:eq("+ num +")");
	var checkeds = parseInt(circle[0].getAttribute("data-checkeds"));
	var total = parseInt(circle[0].getAttribute("data-total"));

	if(checkeds == 0) {
		circle[0].classList.remove("p0");
	} else {
		circle[0].classList.remove("p"+ (Math.round((checkeds/total)*100)));
	}
	checkeds++;
	circle[0].classList.add("p"+(Math.round((checkeds/total)*100)));
	circle[0].setAttribute("data-checkeds", checkeds);
	circle.children("span").html(""+Math.round((checkeds/total)*100)+"%");

	fixCircleColor();
	if(checkeds == total) unblockFase(num);
}

function unblockFase(num_fase) {
	$(".fases-highlight.cor"+(num_fase+2)).each(function($index) {
		$(this).children(".hide")[0].classList.remove("hide");
		$(this).children(".fase-locked")[0].classList.add("hide");
	});

}

//https://stackoverflow.com/questions/10730362/get-cookie-by-name
function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*360*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}

function getCookie(name) {
	var value = "; " + document.cookie;
  	var parts = value.split("; " + name + "=");
  	if (parts.length == 2) return parts.pop().split(";").shift();
}

function deleteCookie(name) {
    document.cookie = name+'=; Max-Age=-99999999;';
}

function checkUserLoggedIn() {
	if (getCookie('loggedin') == 1)
		window.location.href = basePath + "login.php";
}

function openTrainingArea() {
	training.loadTrainingCategories();
    $('#big-areas').addClass('hide');
    $('#training-genes').removeClass("hide");
}

function openProgramArea() {
    $('#big-areas').addClass('hide');
    $('#fases-genes').removeClass("hide");
}

var c=0;

function openNavArea(tabName = null) {
	if(tabName==null) return;

	$('#big-areas').addClass('hide');
	$("#user-tasks").addClass('hide');
	$("#training-genes").addClass('hide');
	$("#fases-genes").addClass('hide');
	$('#areas-genes').removeClass("hide");
	$('.sub-areas').addClass('hide');
	$('#itens-menu').removeClass('hide');
	
	$('#itens-menu .tab-content>div').removeClass('active in');
	$('#'+ tabName + '-tab').addClass('active in');

	if(tabName!='jobs'){		
		$('#modal-jobs').modal('hide');
	}else{
		$('#modal-jobs').modal('show');
	}

	if(tabName=='manual') {
		newTitle = _('Manual do Usuario');
		newDescription = '';
	}
	else if(tabName=='privatecontent') {
		newTitle = _('Mi Programa');
		newDescription = '';
		openTabContent(tabName)
	}
	else if(tabName=='jobs') {
		newTitle = $('.sub-areas [aria-controls="jobs-tab"] .title-text').html(); 
		newDescription = $('.sub-areas [aria-controls="jobs-tab"] .area-description-text').attr("data-description"); 
		openTabContent(tabName)
	}
	else{ 
	    $('#fases-genes').removeClass("show");	
		macroAreaInfos = $('[href$="' + tabName + '-tab"]');
	
		newTitle = macroAreaInfos.find('.title-text').html();
		newDescription = macroAreaInfos.find('.area-description-text').attr('data-description');
	}

	if(tabName=='opm') {
	    $('#areas-genes').addClass('hide');
	    $('#fases-genes').addClass('show'); 
	}

	$('#areas-genes .title-in h4').html(newTitle);
	$('#areas-genes .title-in .text-top').html(newDescription);

	anchorBack = $('#areas-genes .title-in a');
	anchorBack.prop("onclick", null).off('click');
	anchorBack.on("click", function (e) {
		e.preventDefault();
		backToHome(e);
	});
}

function openAreas(text = null) {
	$('#big-areas').addClass('hide');
	$("#user-tasks").removeClass('hide');
	$('#areas-genes').removeClass("hide");
	$('.sub-areas').addClass('hide');
	$('#itens-menu').addClass('hide');
	$('#areas-genes .title-in h4').html(_('Áreas'));
	
	$('#areas-genes .title-in .text-top').html($('#text-top-areas').val());

	anchorBack = $('#areas-genes .title-in a');
	anchorBack.prop("onclick", null).off('click');
	anchorBack.on("click", function (e) {
		e.preventDefault();
		backToHome(e);
	});
}

function backToHome(e) {
	e.preventDefault();
	$('#big-areas').removeClass('hide');
	$('#training-genes').addClass('hide');
	$('#fases-genes').removeClass("show");
	$('#fases-genes').addClass('hide');
	$('#areas-genes').addClass('hide');
	$('#itens-menu').addClass('hide');

	anchorBack = $('#areas-genes .title-in a');
	anchorBack.prop("onclick", null).off('click');
	anchorBack.on("click", function (e) {
		e.preventDefault();
		openAreas();
	});
}

function openLastMacroArea() {
	$('#areas-genes').removeClass("hide");
	$('#big-areas').addClass('hide');
	$("#user-tasks").addClass('hide');
	$('#itens-menu').addClass('hide');

	targetMacroArea = $('.sub-areas.active');
	targetMacroArea.removeClass('hide');
	macroAreaInfos = $('[href$="' + targetMacroArea.attr('id') + '"]');
	
	newTitle = macroAreaInfos.find('.title-text').html();
	newDescription = macroAreaInfos.find('.area-description-text').attr('data-description');

	$('#areas-genes .title-in h4').html(newTitle);
	$('#areas-genes .title-in .text-top').html(newDescription);

	anchorBack = $('#areas-genes .title-in a');
	anchorBack.prop("onclick", null).off('click');
	anchorBack.on("click", function (e) {
		e.preventDefault();
		openAreas();
	});
}

/******************************************** */

/**
 *
 * Areas content
 *
 */

function openAreasContent() {
	var items = document.querySelectorAll(".area-item a:not(.dont-open-areas-content)");
	items.forEach(item => {
		item.addEventListener("click", async function(e) {
			if(!$(this).parent().hasClass('macro-areas')) {
				anchorBack = $('#areas-genes .title-in a');
				anchorBack.prop("onclick", null).off('click');
				anchorBack.on("click", function (e) {
					e.preventDefault();
					openLastMacroArea();
				});
				$("#itens-menu").removeClass('hide')
			}
			else if($(this).attr('href')!='#adminUsers-tab') {
				$("#itens-menu").addClass('hide')
			}
			else $("#itens-menu").removeClass('hide');
			$("#user-tasks").addClass('hide');
		});
	});

}


/**
 * Load Videos in big area
 */
var training = (function(){
	function loadTrainingCategories() {
		if ($('#training-wrapper > img').length) {
			countries = $('#training-wrapper').attr('data-countries');
			$('#training-content').load(basePath + 'trainingContent/content', function() {
				$('#training-wrapper > img, #training-wrapper > p').hide().remove();

				if($(window).width() + 15 < 600) {
					loadCarousel(2);
				}
				else if($(window).width() + 15 < 992) {
					loadCarousel(3);
				}
				else
					loadCarousel(4);

				loadTrainingVideosPerCategory();
				OpenAreaInfirstInteraction();
			});
		}
	}

	function OpenAreaInfirstInteraction() {
		let category = document.querySelector("ul#training-items");
		let categoryId = category.getAttribute("first-interaction");
		getContentTrainingAndLoadInView(categoryId);
	}

	function getContentTrainingAndLoadInView(categoryID) {
		$(`#training-content-wrapper-${categoryID}`).addClass("active");
		
		trainingContent = $(`#training-content-content-${categoryID}`);
		trainingContent.load(
			basePath + 'trainingContent/getVideosTraining', {categoryID}, 
			function() {
				inputUrl = trainingContent.find('[name="training-video-url"]').first();
				if(inputUrl.length>0) {
					url = inputUrl.val();
					phrase = inputUrl.siblings('input').val();
				}
				else {
					url = '';
					phrase = '';
				}

				iframe = $("#current-training-video-iframe"); 
				iframe.attr('src', url);
				iframe.parent().next().html(phrase);

				startSlideThumbnail();
			}
		);
	}

	function loadTrainingVideosPerCategory() {
		let trainingConteinerCategory = document.querySelectorAll("[genes-training]");

		trainingConteinerCategory.forEach(category => {
			category.addEventListener("click", () => {
				let categoryId = category.getAttribute("genes-training");
			
				getContentTrainingAndLoadInView(categoryId);
			})
		})
	}

	function destroyCarousel() {
		$('#training-items.owl-carousel').trigger('destroy.owl.carousel');
	}

	function loadCarousel(items) {
		$('#training-items.owl-carousel').owlCarousel({
				dots: false,
				autoHeight: false,
				items: items,
				slideBy: 1,
				margin: 5,
				mouseDrag: true,
				touchDrag: true
			})

			$('.carousel-arrow.prev').click(function() {
				$(this).siblings('.owl-carousel').trigger('prev.owl.carousel')
			})
		
			$('.carousel-arrow.next').click(function() {
				$(this).siblings('.owl-carousel').trigger('next.owl.carousel')
			})
	}

	function reloadCarousel(items) {
		destroyCarousel();
		loadCarousel(items);	
	}

	function startSlideThumbnail() {
		let nextBtns = document.querySelectorAll("[genes-carrousel-next]");
		let prevBtns = document.querySelectorAll("[genes-carrousel-prev]");

		nextBtns.forEach(btn => {
			let slideVideos = 0;
			btn.addEventListener("click", () => {
				let tot = btn.getAttribute("genes-carrousel-next");
				let areaID = btn.getAttribute("genes-area-id");

				slideVideos++;

				if (slideVideos === tot - 1 || tot === 1) {
					slideVideos = 0;
				}

				let areaSlideContent = document.getElementsByClassName(
					`video-carousel-area-${areaID}`
				)[0]
				
				areaSlideContent.style.margin = "-" + 148 * slideVideos + "px 0 0";
				areaSlideContent.style.transition = "all 1s";
			})
		});

		prevBtns.forEach(btn => {
			let slideVideos = 0;
			btn.addEventListener("click", () => {
				let tot = btn.getAttribute("genes-carrousel-prev");
				let areaID = btn.getAttribute("genes-area-id");

				slideVideos--;

				if (slideVideos < 0) {
					slideVideos = tot - 2;
				}
				
				let areaSlideContent = document.getElementsByClassName(
					`video-carousel-area-${areaID}`
				)[0]
				
				areaSlideContent.style.margin = "-" + 148 * slideVideos + "px 0 0";
				areaSlideContent.style.transition = "all 1s";
			})
		});
	}

	return {
		loadTrainingCategories,
		getContentTrainingAndLoadInView,
		reloadCarousel
	}
}())

function loadTrainingVideo(anchor) {
	url = anchor.children('[name="training-video-url"]').val();
	phrase = anchor.children('[name="training-video-phrase"]').val();

	$("#current-training-video-phrase").html('');
	iframe = $("#current-training-video-iframe"); 
	iframe.attr('src', url);

	$(iframe).load(function(){
		$("#current-training-video-phrase").html(phrase);
    });
}

var lastWidth = $(window).width() + 15;

$(window).resize(function () {
	if($(window).width() + 15 < 600) {
		if(lastWidth >= 600)
			training.reloadCarousel(2);
	}
	else if($(window).width() + 15 < 992) {
		if(lastWidth >= 992 || lastWidth <=600)
			training.reloadCarousel(3);
	}
	else {
		if(lastWidth < 992)
			training.reloadCarousel(4);
	}
	lastWidth = $(window).width() + 15;
});

$('[href$="-tab"][data-toggle="tab"]').on('shown.bs.tab', function() {
	newTitle = $(this).find('.title-text').html(); 
	newDescription = $(this).find('.area-description-text').attr("data-description"); 


	$('#areas-genes .title-in h4').html(newTitle);
	$('#areas-genes .title-in .text-top').html(newDescription);
});


$('.macro-areas a').click(function() {
	anchorBack = $('#areas-genes .title-in a');
	anchorBack.prop("onclick", null).off('click');
	anchorBack.on("click", function (e) {
		e.preventDefault();
		openAreas();
	});
});

$('#partnerForm').on('submit', function(e) {
	e.preventDefault();

	companyToken = $("#company_token").val();
	form = $(this);

	var frm = form.serializeArray();
	var obj = {};
	for (var a = 0; a < frm.length; a++) {
		obj[frm[a].name] = frm[a].value;
	}
	var jsonData = JSON.stringify(obj);

	$.ajax({
		url:		form.attr('action'),
		type:		form.attr('method'),
		dataType:	'json',
		data: jsonData,
		headers: {"x-api-key": companyToken, "Accept": "application/json"}
	})
	.done(function(data) {
		if(data['success'] == true && data['token'] == null) {
			window.location.href = baseUrl + '../online/login/login.php' + data['token'];
		}
		else {
			swal(('Error'), data.message, 'error');
		}
	})
	.fail(function(data) {
		swal(('Error'), data.responseJSON.message, 'error');
	})

})