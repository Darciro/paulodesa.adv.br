(function ($) {
    $(document).ready(function () {
        app.init();
    });

    var app = {
        init: function () {
            this.galdarSurvey();
        },

        galdarSurvey: function () {
            //console.log('answerSurvey here');
            $('.galdar-survey-form').on('submit', function (e) {
                e.preventDefault();

                var $form = $(this),
                    $quantidadePerguntas = $form.find('.form__alternativas'),
                    $quantidadeRespostas = $form.find('input[type=radio]:checked'),
                    $mensagemErro = $('.mensagem-erro'),
                    _respostas = [];

                $mensagemErro.removeClass('active');

                if ($quantidadeRespostas.length < $quantidadePerguntas.length) {
                    $('html').animate(
                        { scrollTop: 0 },
                        {
                            complete: function() {
                                $mensagemErro.addClass('active');
                            }
                        },
                        500
                    );
                } else {
                    $quantidadeRespostas.each(function(i) {
                        _respostas[i] = $(this).val();
                    });

                    var data = {
                        survey_id: $form.attr('data-survey-id'),
                        respostas: _respostas
                    };

                    app.answerSurvey(data);
                }

            });
        },

        answerSurvey: function (data) {
            // console.log(data);

            $.ajax({
                url: GS.ajaxurl,
                data: {
                    action: 'answer_survey',
                    nonce: GS.gs_nonce,
                    data: data
                },
                type: 'POST',
                beforeSend: function () {},
                success: function (res) {
                    //console.log(res);
                    $('html').animate(
                        { scrollTop: 0 },
                        {
                            complete: function() {
                                var tempo = 5000,
                                    $form = $('.galdar-survey-form');

                                $form
                                    .find('.box-questao,.answer-survey-button')
                                    .addClass('inactive')
                                    .end()
                                    .find('.mensagem-agradecimento')
                                    .addClass('active');

                                setTimeout(function(){
                                    $form
                                        .find('.mensagem-agradecimento')
                                        .removeClass('active')
                                        .end()
                                        .find('input[type=radio]')
                                        .attr('checked', false)
                                        .end()
                                        .find('.box-questao,.answer-survey-button')
                                        .removeClass('inactive');
                                }, tempo);
                            }
                        },
                        500
                    );
                    
                },
                error: function( jqXHR, textStatus, errorThrown ) {
                    console.error( jqXHR, textStatus, errorThrown );
                }
            });
        },
    };
})(jQuery);
