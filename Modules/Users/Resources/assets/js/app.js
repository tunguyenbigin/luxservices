import Form from '@themes/inc/form.js';
import swal from 'sweetalert'

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

 var cform1 = new Form()
    cform1.formId ='#reg-stp-1'
    cform1.url = api.users.register
    cform1.method = 'post'
    cform1.handleSuccess = (data)=>{
        goNext(cform1.controlObj)
    }
    cform1.handleCloseWarning = ()=>{
        window.location.reload()
    }
    cform1.handleSubmit()


var cform2 = new Form()
    cform2.formId ='#reg-stp-2'
    cform2.url = api.users.register
    cform2.method = 'post'
    cform2.handleSuccess = (data)=>{
        goNext(cform2.controlObj)
    }
    cform2.handleCloseWarning = ()=>{
        window.location.reload()
    }
    cform2.handleSubmit()


var cform3 = new Form()
    cform3.formId ='#reg-stp-3'
    cform3.url = api.users.register
    cform3.method = 'post'
    cform3.handleSuccess = (data)=>{
        goNext(cform3.controlObj)
    }
    cform3.handleCloseWarning = ()=>{
        window.location.reload()
    }
    cform3.handleErrorException = (data)=>{
        swal({
            text: 'We can not pick your location automatically! Please enter your address to pick your location.',
            content: "input",
            button: {
                text: "Pick Location!",
                closeModal: false,
            },
        })
        .then(address => {
            swal.stopLoading()
            if(!address) swal.close()

            var geocoder = new google.maps.Geocoder();
            geocoder.geocode( { 'address': address}, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var pos = {
                        lat: results[0].geometry.location.lat(),
                        lng: results[0].geometry.location.lng()
                    };
                    $('#lat_pos').val(pos.lat);
                    $('#long_pos').val(pos.lng);
                    $('#address').val(address);
                    $('#saddress').val(address);

                    var map = new google.maps.Map(document.getElementById('map'), {
                        center: {lat: -34.397, lng: 150.644},
                        zoom: 18
                    });

                    infoWindow = new google.maps.InfoWindow;
                    infoWindow.setContent('<p style="color: #ee0a79;word-break: break-word;width: 250px;margin: 0;">' + address + '</p>')
                    infoWindow.setPosition(pos);
                    infoWindow.open(map);
                    map.setCenter(pos);
                    swal.close()
                } else {
                    swal({
                        title: 'Oops!',
                        text: 'Can not pick location with this address!',
                        icon: 'warning',
                    })
                }
            })
        })
    }
    cform3.handleSubmit()



var cform4 = new Form()
    cform4.formId ='#reg-stp-4'
    cform4.url = api.users.register
    cform4.method = 'post'
    cform4.handleSuccess = (data)=>{
        goNext(cform4.controlObj)
    }
    cform4.handleCloseWarning = ()=>{
        window.location.reload()
    }
    cform4.handleSubmit()



var cform5 = new Form()
    cform5.formId ='#reg-stp-5'
    cform5.url = api.users.register
    cform5.method = 'post'
    cform5.handleSuccess = (data)=>{
        console.log('fuck from here')
        swal({
            title: 'Success',
            text: data.message,
            icon: 'success'
        })
    }
    cform5.handleError = (data)=>{
        swal({
            title: 'Oops!',
            text: data.message,
            icon: 'warning',
        })
    }
    cform5.handleCloseWarning = ()=>{
        window.location.reload()
    }
    cform5.handleSubmit()

window.goNext = function(el){
    if(animating) return false;
    animating = true;

    current_fs = $(el).parent().parent().parent();
    next_fs = $(el).parent().parent().parent().next();

    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale current_fs down to 80%
            scale = 1 - (1 - now) * 0.2;
            //2. bring next_fs from the right(50%)
            left = (now * 50)+"%";
            //3. increase opacity of next_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({
                'transform': 'scale('+scale+')',
                'position': 'absolute'
            });
            next_fs.css({'left': left, 'opacity': opacity});
        },
        duration: 800,
        complete: function(){
            current_fs.hide();
            animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
}


$(".previous").click(function(){
    if(animating) return false;
    animating = true;

    current_fs = $(this).parent().parent().parent();
    previous_fs = $(this).parent().parent().parent().prev();

    //de-activate current step on progressbar
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

    //show the previous fieldset
    previous_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale previous_fs from 80% to 100%
            scale = 0.8 + (1 - now) * 0.2;
            //2. take current_fs to the right(50%) - from 0%
            left = ((1-now) * 50)+"%";
            //3. increase opacity of previous_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({'left': left});
            previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
        },
        duration: 800,
        complete: function(){
            current_fs.hide();
            animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});


window.verifyCode = function () {
    axios.post(api.users.verify).then(response =>{
        if(response.data.status === 'success'){
            swal({
                title: 'Success!',
                icon: 'success',
                text: response.data.message
            })
        }else{
            swal({
                title: 'Oops!',
                icon: 'error',
                text: response.data.message
            })
        }
    })
}