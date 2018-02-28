var DoorType="ankona";
var matIndex=0;
var glassIndex=0;
var rectIndex=0;
var adsIndex=0;

var mats = [//Шпон
['Ясень - тон 7','Ясень - тон 4','Красное дерево','Ясень - тон 6','Натуральная вишня'],	//Названия
['Износостойкое покрытие','Фирменный шпон','Уникальный дизайн/долговечный выбор','Износостойкое покрытие','Экологичная дверь'],
[3,3,3,3,3], //Экологичность
[3,3,3,3,3], //Долговечность
[3,3,3,3,3], //Стоимость
[3,3,3,3,3] //Дизайн
];

var glasses = [//Стекло
['Без стекла','Версаль гравировка стразы','Витраж Валенсия бронза','Витраж Виттори бронза','Витраж Колосья','Витраж Павлин','Витраж Сантори 2','Витраж цветы','Виттория 2 Бронза Гравировка','Виттория 2 гравировка'],	//Названия
['Усиленная прочность/высокая шумоизоляция','Использование страз/Гравировка по стеклу','Бронзовое напыление','Аскетичный дизайн','Повышенная экологичность','Уникальный дизайн','Восхитительная красота','Итальянское качество','Безопасное стекло','Гравировка по стеклу','Итальянский стиль'],
[3,3,3,3,3,3,3,3,3,3,3], //Экологичность
[3,3,3,3,3,3,3,3,3,3,3], //Долговечность
[3,3,3,3,3,3,3,3,3,3,3], //Стоимость
[3,3,3,3,3,3,3,3,3,3,3] //Дизайн
];

var rects = [//Обрамление
['Капитель','Карниз','Наличник'],	//Названия
['Износостойкое покрытие','Фирменный шпон','Уникальный дизайн/долговечный выбор'],
[3,3,3], //Экологичность
[3,3,3], //Долговечность
[3,3,3], //Стоимость
[3,3,3] //Дизайн
];

var adds = [//Ручки
['Светлый комплект','Темный комплект'],	//Названия
['Износостойкое покрытие','Фирменный шпон'],
[3,3], //Экологичность
[3,3], //Долговечность
[3,3], //Стоимость
[3,3] //Дизайн
];

jQuery(document).ready(function() {
	fillConstructor();

	$( "#mat" ).change(function() {

		$( "#matPreview-2" ).attr({
		  src: $( "#matPreview-1" ).attr('src'),
		  
		});
		$( "#mat-container" ).show();


		$( "#matPreview-1" ).attr({
		  src: 'img/'+DoorType+'-mat-'+$(this).val()+'.png',
		  title: $(this).text(),
		  alt: $(this).text()
		});
		$( "#mat-container" ).slideUp(600);
		var str = '';
		str+= mats[1][$(this).val()];
		
		var advs = str.split('/');
		str = '';
		advs.forEach(function(item) {
		  	str+='<p>'+item+'</p>'
		  	
		});
		$('#mat-list').html(str);

	

	   
	});

	$( "#glass" ).change(function() {

		$( "#glassPreview-2" ).attr({
		  src: $( "#glassPreview-1" ).attr('src'),
		  
		});
		$( "#glass-container" ).show();


		$( "#glassPreview-1" ).attr({
		  src: 'img/'+'glass-'+$(this).val()+'.png',
		  title: $(this).text(),
		  alt: $(this).text()
		});
		$( "#glass-container" ).slideUp(1000);

		var str = '';
		str+= glasses[1][$(this).val()];
		
		var advs = str.split('/');
		str = '';
		advs.forEach(function(item) {
		  	str+='<p>'+item+'</p>'
		  	
		});
		$('#glass-list').html(str);

	   
	});
	
});


function fillConstructor()
{	
	var i = 0;
	mats[0].forEach(function(item, i, arr) {
	    $('#mat').append($("<option></option>")
                    .attr("value",i)
                    .text(item)); 
	    i++;
	});

	i = 0;
	glasses[0].forEach(function(item, i, arr) {
	    $('#glass').append($("<option></option>")
                    .attr("value",i)
                    .text(item)); 
	    i++;
	});

	i = 0;
	rects[0].forEach(function(item, i, arr) {
	    $('#rect').append($("<option></option>")
                    .attr("value",i)
                    .text(item)); 
	    i++;
	});

	i = 0;
	adds[0].forEach(function(item, i, arr) {
	    $('#adds').append($("<option></option>")
                    .attr("value",i)
                    .text(item)); 
	    i++;
	});
}