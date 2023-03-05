$(document).ready(function ($) {
    $('.stellarnav').stellarNav({
        theme: 'dark',
        breakpoint: 960,
        position: 'right',
        phoneBtn: '18009997788',
        locationBtn: 'https://www.google.com/maps'
    });
});


$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});


/*
================Ajax Address Filter================
 */
$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    /*=======Permanent Address=======*/
    $('#permanent_country').change(function () {
        var country_id = $(this).val();
        let url = ajaxAddressFilerUrl;
        let data = {country_id: country_id};
        axios.post(url, data).then(function (response) {
            $('#permanent_province').html(response.data);
        }).catch(function (error) {
            console.log(error);
        });
    });
    $('#permanent_province').change(function () {
        var province_id = $(this).val();
        let url =ajaxAddressFilerUrl;
        let data = {province_id: province_id};
        axios.post(url, data).then(function (response) {
            $('#permanent_district').html(response.data);
        }).catch(function (error) {
            console.log(error);
        });
    });
    $('#permanent_district').change(function () {
        var district_id = $(this).val();
        let url = ajaxAddressFilerUrl
        let data = {district_id: district_id};
        axios.post(url, data).then(function (response) {
            $('#permanent_municipality').html(response.data);
        }).catch(function (error) {
            console.log(error);
        });
    });

    /*=======End Permanent Address=======*/

    /*=======temporary Address=======*/
    $('#temporary_country').change(function () {
        var country_id = $(this).val();
        let url = ajaxAddressFilerUrl
        let data = {country_id: country_id};
        axios.post(url, data).then(function (response) {
            $('#temporary_province').html(response.data);
        }).catch(function (error) {
            console.log(error);
        });
    });
    $('#temporary_province').change(function () {
        var province_id = $(this).val();
        let url = ajaxAddressFilerUrl;
        let data = {province_id: province_id};
        axios.post(url, data).then(function (response) {
            $('#temporary_district').html(response.data);
        }).catch(function (error) {
            console.log(error);
        });
    });
    $('#temporary_district').change(function () {
        var district_id = $(this).val();
        let url =ajaxAddressFilerUrl;
        let data = {district_id: district_id};
        axios.post(url, data).then(function (response) {
            $('#temporary_municipality').html(response.data);
        }).catch(function (error) {
            console.log(error);
        });
    });
    /*=======End temporary Address=======*/
});


/*
================End Ajax Address Filter================
 */

