if(document.getElementById('donate'))
{
	new Payments(
		{
			publicKey: 'FLWPUBK_TEST-25fb3f0d5bc18b74ddf4297510336c01-X', 
			buttonText: 'Donate Now', 
			formId: 'donate',
			checkBoxText: 'Make my donation public',
			payment: {
				currency: 'UGX',
				country: 'UGANDA',
				initUrl: '/payments/init',
				callback: '/payments/verify'
			},
			app: {
				titile: 'SANYU BABIES HOME',
				logo: window.location.origin + '/imgs/icons/logo.png'
			},
			csrf: document.querySelector("input[name='_token'").value,
		});
}