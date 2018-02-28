jQuery(document).ready(function() {
	
	var someDate = new Date();
	someDate.setDate(someDate.getDate() + 3);
	$("#countdown").countdown(someDate.getFullYear().toString()+"/"+(someDate.getMonth() + 1).toString()+"/"+someDate.getDate().toString(), function(event) {
      $(this).text(
        event.strftime('%D: %H: %M: %S')
      );
    });

    $('div.menu-item a').click(function(e){
    	e.preventDefault();
    	$('html, body').animate({
	        scrollTop: $($(this).attr('href')).offset().top-60,
	    }, 1000);
    });

    $('#cb').click(function(e){
    	$('#cbtext').slideDown(10);
    	$('#doortext').slideUp(10);
    	$('#spectext').slideUp(10);
    	$('#doorInp').slideUp(10);

    	$('#type').val('Обратный звонок');

    });
    $('#cbb').click(function(e){
        $('#cbtext').slideDown(10);
        $('#doortext').slideUp(10);
        $('#spectext').slideUp(10);
        $('#doorInp').slideUp(10);

        $('#type').val('Обратный звонок');

    });
    $('#spec').click(function(e){
    	$('#spectext').slideDown(10);
    	$('#doortext').slideUp(10);
    	$('#cbtext').slideUp(10);
    	$('#doorInp').slideUp(10);

    	$('#type').val('Вызов специалиста');
    });
    $('#d1').click(function(e){
    	$('#doortext').slideDown(10);
    	$('#spectext').slideUp(10);
    	$('#cbtext').slideUp(10);
    	$('#door-i').val($('#d1txt').html());
    	$('#doorInp').slideDown(10);

    	$('#type').val('Заказ двери');

    });
    $('#d2').click(function(e){
    	$('#doortext').slideDown(10);
    	$('#spectext').slideUp(10);
    	$('#cbtext').slideUp(10);
    	$('#door-i').val($('#d2txt').html());
    	$('#doorInp').slideDown(10);

    	$('#type').val('Заказ двери');
    });
    $('#d3').click(function(e){
    	$('#doortext').slideDown(10);
    	$('#spectext').slideUp(10);
    	$('#cbtext').slideUp(10);
    	
    	$('#door-i').val($('#d3txt').html());
    	$('#doorInp').slideDown(10);

    	$('#type').val('Заказ двери');
    });

    $('#orderDoor').click(function(e){
    	$('#doortext').slideDown(10);
    	$('#spectext').slideUp(10);
    	$('#cbtext').slideUp(10);
    	
    	$('#doorInp').slideUp(10);

    	$('#type').val('Заказ двери');
    });

    $("#order-send").click(function(e){
    	e.preventDefault();
    	SendData();
    });

    $map = $('#client-map-wrapper');
    if ($map.length > 0) {
        function inituser() {
            var _inituser = $map;

            var spbCoords = [59.939095, 30.315868];
            var coord1 = [60.050893,30.332038];
            var coord2 = [60.001635,30.266784];
            var coord3 = [59.832059,30.338362];
            var MyMap = window.map = new ymaps.Map('client-map', {
                center   : spbCoords,
                zoom     : 9,
                behaviors: [
                    'default'
                ]
            });
            search = new ymaps.control.SearchControl({
                    useMapBounds: true,
                    noPlacemark : true
                }
            );

            console.log(MyMap);
            MyMap.controls.add(search);
            MyMap.controls.add('zoomControl');
            MyMap.controls.add('mapTools');
            MyMap.controls.add('typeSelector');
            MyMap.controls.add('scaleLine');
            MyMap.cursors.push('crosshair');

            var updateHtmlCoords = function (coords) {
                if (coords != spbCoords) {
                    $lat = $map.find('.coord').find('.lat').html(coords[0] + '&#176;');
                    $lon = $map.find('.coord').find('.lon').html(coords[1] + '&#176;');
                    $('.address').val(_inituser.placemark.properties.get('balloonContent'));
                    $('.address').addClass("has-content");

                    $('input[name=inpcoordslat]').val(coords[0]);
                    $('input[name=inpcoordslon]').val(coords[1]);
                }
            };

            var updateAddress = function (coords) {
                ymaps
                    .geocode(coords)
                    .then(function (res) {
                        var firstGeoObject = res.geoObjects.get(0);
                        _inituser.placemark.properties.set({
                            balloonContent  : firstGeoObject.properties.get('name')
                        });
                        MyMap.setCenter(coords);
                        updateHtmlCoords(coords);
                    })
                ;
            };

            var updatePlacemark = function (coords) {
                //if (!_inituser.placemark) {
                    _inituser.placemark   = new ymaps.Placemark(coords, {
                        hintContent : ""
                    }, {
                        iconImageHref   : 'img/map-marker.png',
                        iconImageSize   : [58, 64],
                        iconImageOffset : [2, -64],
                        draggable       : false,
                    });
                    MyMap.geoObjects.add(_inituser.placemark);
                // } else {
                //     _inituser.placemark.geometry.setCoordinates(coords);
                //     _inituser.placemark.properties.set(coords);
                // }
                //updateAddress(coords);
            }

            //updatePlacemark(spbCoords);
            updatePlacemark(coord1);
            updatePlacemark(coord2);
            updatePlacemark(coord3);
            //updateHtmlCoords(spbCoords);

            // search.events.add('resultselect', function (e) {
            //     var results = search.getResultsArray();
            //     var selected= e.get('resultIndex');
            //     var coords  = results[selected].geometry.getCoordinates();
            //     updatePlacemark(coords);
            //     updateHtmlCoords(coords);
            // });

            // MyMap.events.add('click', function (e) {
            //     var coords  = e.get('coordPosition').map(function (point) {
            //         return point.toPrecision(8);
            //     });
            //     updatePlacemark(coords);
            //     updateHtmlCoords(coords);
            // });
        }
        ymaps.ready(inituser);
    }



    $(".form-gr input").val("");

    $(".form-gr input").focusout(function(){
        if($(this).val() != ""){
            $(this).addClass("has-content");
        }else{
            $(this).removeClass("has-content");
        }
    })


});

function SendData()
{
	$.ajax({
            type: "GET",
            url: "/mail.php",
            data: $("#order-form").serialize()
        }).done(function(data) {
            if (data == '1') {
                $("#order-form input").val('');
                $("#order-form").slideUp();
                $("#error").slideUp();
                $("#order-form").slideUp();
                $("#result").html('Заявка принята, скоро мы с Вами свяжемся.');
                $("#result").slideDown();
                $('#doortext').slideUp();
		    	$('#spectext').slideUp();
		    	$('#cbtext').slideUp();		    	
		    	$('#doorInp').slideUp();
            } else {
                if (data == '-1') {
                    $("p#error").html("Произошла ошибка, попробуйте позже или свяжитесь с нами по телефону");
                    $("p#error").slideDown();
                } else {
                    $("p#error").html(data);
                    $("p#error").slideDown();
                }
            }
        });
        return false;
}

