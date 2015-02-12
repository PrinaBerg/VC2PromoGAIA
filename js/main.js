$(document).ready(function(){

 //createElement Container.

  //container article -> '#help'

//Here starts doubts JS;


  $container = [];

  $container = {

    content: $('main').find('nav').children('#help'),
    footer: $('footer').find('figure').children('img')

  }; //containers end

  //selectors

  $selectors = [];

  $selectors = {

    list_one: $('#help').find('ul').children('.register'),
    list_two: $('#help').find('ul').children('.log'),
    list_three: $('#help').find('ul').children('.doubt')

  }; //selectors end

  //forms-selectors

  $form_selector = [];

  $form_selector = {

    form_register: $('#help').find('#form_register').children('form[name="form_register"]'),
    doubts_login: $('#help').find('#form_register').children('#doubts-login'),
    contact_us: $('#help').find('#form_register').children('#contact-us')

  };//form-selectors end

  $buttons = [];

  $buttons = {

    button_back: $('#help').find('#form_register').children('.backButton')

   };


  //button one
  if(typeof $selectors.list_one !== 'undefined'){

    $selectors.list_one.on('click',function(){

    $selectors.list_two.fadeOut(10);
    $selectors.list_three.fadeOut(10);
    $container.content.css({'height':'500px'});
    $container.footer.css({'position' : 'relative', 'marginTop' : '50px'});
    $form_selector.form_register.slideDown(800);
    $buttons.button_back.fadeIn(100);


  });

}else{

  alert('An error was found.');

};

if(typeof $selectors.list_two !== 'undefined' ){

  //button two
  $selectors.list_two.on('click', function(){

    $selectors.list_one.fadeOut(10);
    $selectors.list_three.fadeOut(10);
    $container.content.css({'height':'500px'});
    $container.footer.css({'position' : 'relative', 'marginTop' : '50px'});
    $form_selector.doubts_login.slideDown(800);
    $buttons.button_back.fadeIn(100);


  });


}else{

  alert('An error was found.');

};


if(typeof $selectors.list_three !== 'undefined'){
  //button three
  $selectors.list_three.on('click', function(){

    $selectors.list_one.fadeOut(10);
    $selectors.list_two.fadeOut(10);
    $container.content.css({'height':'500px'});
    $container.footer.css({'position' : 'relative', 'marginTop' : '50px'});
    $form_selector.contact_us.slideDown(800);
    $buttons.button_back.fadeIn(100);


  });

}else{

  alert('An error was found.');

};

//clear button
$buttons.button_back.on('click', function(){

    $selectors.list_one.fadeIn(100);
    $selectors.list_two.fadeIn(100);
    $selectors.list_three.fadeIn(100);
    $form_selector.form_register.fadeOut(80);
    $form_selector.doubts_login.fadeOut(80);
    $form_selector.contact_us.fadeOut(80);
    $buttons.button_back.fadeOut(100);


  });

});


//Here starts about JS;

  $pageStruts = [];

  $pageStruts = {

   content: $('main').find('nav').children('#help'),
   footer: $('footer').find('figure').children('img')

};

  $pagaSelectors = [];

  $pageSelectors = {

  list_one: $('#help').find('ul').children('.dev-team'),
  list_two: $('#help').find('ul').children('.vc2-promo'),
  list_three: $('#help').find('ul').children('.reference')

};

  $containerSelected = [];

  $containerSelected = {

  team: $('nav').find('#help').children('#team'),

};

  $backButton = [];

  $backButton = {

    backOption: $('nav').find('#help').children('.backButton')

  };


 $pageSelectors.list_one.on('click', function(){

   $pageSelectors.list_three.fadeOut(10);
   $pageSelectors.list_two.fadeOut(10);
   $pageStruts.content.css({'height':'500px'});
   $pageStruts.footer.css({'position' : 'relative', 'marginTop' : '50px'});
   $containerSelected.team.slideDown(800);
   $backButton.backOption.fadeIn(100);


 });
