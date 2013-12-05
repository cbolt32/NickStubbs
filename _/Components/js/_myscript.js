$(function() {

    //activate training course tabs, allowing navigation from homepage accordion

    var hash = window.location.hash;
    hash && $('ul.nav li a[href="' + hash + '"]').tab('show');


    //Highlight current nav, prevents error as header.php utilised as php include in each page
    $("#Home a:contains('Home')").parent().addClass('active'); //if page # is home, and an a tag contains "Home" add active class to parent (li) tag
    $("#about a:contains('About Us')").parent().addClass('active');
    $("#CourseDirectory a:contains('Training Course Directory')").parent().addClass('active');
    $("#Affiliations a:contains('Credentials & Affiliations')").parent().addClass('active');
    $("#CourseEnquiry a:contains('Course Enquiries')").parent().addClass('active');
    $("#ContactUs a:contains('Contact Us')").parent().addClass('active');
   //Make Training Dir Nav menu drop down on hover
   $('ul.nav li.dropdown').hover(function() {
       $('.dropdown-menu', this).fadeIn();
   }, function() {
       $('.dropdown-menu', this).fadeOut('fast');


   });


});

