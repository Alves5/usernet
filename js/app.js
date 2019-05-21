
$(document)
.ready(function() {
	$('.ui.form')
		.form({
			fields: {
				password: {
					identifier  : 'password',
					rules: [
						{
							type   : 'empty',
							prompt : 'Por favor, digite sua senha e confirme-a'
						},
						{
							type   : 'length[4]',
							prompt : 'Sua senha deve possuir 4 caracteres no mínimo'
						}
					]
				},
				password2: {
					identifier  : 'password2',
					rules: [
						{
							type   : 'empty',
							prompt : 'Por favor, digite sua confirmação de senha e confirme-a'
						},
						{
							type   : 'length[4]',
							prompt : 'Sua confirmação de senha deve possuir 4 caracteres no mínimo'
						}
					]
				}
			}
		})
	;
})
;