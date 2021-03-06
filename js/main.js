$(document).ready(function(){

 //createElement Container.

  //container article -> '#help'

//Here starts doubts JS;


  var $container = [];

  $container = {

    content: $('main').find('nav').children('#help'),
    footer: $('footer').find('figure').children('img')

  }; //containers end

  //selectors

  var $selectors = [];

  $selectors = {

    list_one: $('#help').find('ul').children('.register'),
    list_two: $('#help').find('ul').children('.log'),
    list_three: $('#help').find('ul').children('.doubt')

  }; //selectors end

  //forms-selectors

  var $form_selector = [];

  $form_selector = {

    form_register: $('#help').find('#form_register').children('form[name="form_register"]'),
    doubts_login: $('#help').find('#form_register').children('#doubts-login'),
    contact_us: $('#help').find('#form_register').children('#contact-us')

  };//form-selectors end

  var $buttons = [];

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
if(typeof $buttons.button_back !== 'undefined'){
$buttons.button_back.on('click', function(){

    $selectors.list_one.fadeIn(100);
    $selectors.list_two.fadeIn(100);
    $selectors.list_three.fadeIn(100);
    $form_selector.form_register.fadeOut(80);
    $form_selector.doubts_login.fadeOut(80);
    $form_selector.contact_us.fadeOut(80);
    $buttons.button_back.fadeOut(100);


  });

}else{

  alert('An error was found');

}


//Here starts about JS;

  var $pageStruts = [];

  $pageStruts = {

   content: $('main').find('nav').children('#help'),
   footer: $('footer').find('figure').children('img')

};

  var $pagaSelectors = [];

  $pageSelectors = {

  list_one: $('#help').find('ul').children('.dev-team'),
  list_two: $('#help').find('ul').children('.vc2-promo'),
  list_three: $('#help').find('ul').children('.reference')

};

  var $containerSelected = [];

  $containerSelected = {

  team: $('nav').find('#help').children('#team'),
  vc2: $('nav').find('#help').children('#vc2-promo'),
  reference: $('nav').find('#help').children('#reference')

};

  var $backButton = [];

  $backButton = {

    backOption: $('nav').find('#help').children('.backButton')

  };


 if(typeof $pageSelectors.list_one !== 'undefined'){

 $pageSelectors.list_one.on('click', function(){

   $pageSelectors.list_three.fadeOut(10);
   $pageSelectors.list_two.fadeOut(10);
   $pageStruts.content.css({'height':'500px'});
   $pageStruts.footer.css({'position' : 'relative', 'marginTop' : '50px'});
   $containerSelected.team.slideDown(800);
   $backButton.backOption.fadeIn(100);

 });

}else{

  alert('An error was found');

}


 if(typeof $pageSelectors.list_two !== 'undefined'){

 $pageSelectors.list_two.on('click', function(){

  $pageSelectors.list_one.fadeOut(10);
  $pageSelectors.list_three.fadeOut(10);
  $pageStruts.content.css({'height':'500px'});
  $pageStruts.footer.css({'position' : 'relative', 'marginTop' : '50px'});
  $containerSelected.vc2.slideDown(800);
  $backButton.backOption.fadeIn(100);


  });

}else{

  alert('An error was found');

}

if (typeof $pageSelectors.list_three !== 'undefined'){

  $pageSelectors.list_three.on('click', function(){

  $pageSelectors.list_one.fadeOut(10);
  $pageSelectors.list_two.fadeOut(10);
  $pageStruts.content.css({'height':'500px'});
  $pageStruts.footer.css({'position':'relative', 'marginTop' : '50px'});
  $containerSelected.reference.slideDown(800);
  $backButton.backOption.fadeIn(100);


  });

}else{

  alert('An error was found');

}

 if(typeof $backButton.backOption !== 'undefiend'){

 $backButton.backOption.on('click', function(){

   $pageSelectors.list_one.fadeIn(100);
   $pageSelectors.list_two.fadeIn(100);
   $pageSelectors.list_three.fadeIn(100);
   $containerSelected.team.fadeOut(80);
   $containerSelected.vc2.fadeOut(80);
   $containerSelected.reference.fadeOut(80);
   $backButton.backOption.fadeOut(80);

 });

}else{

  alert('An error was found');

}

});


//tooltip function.

var $tooltipContainer = [];

    $tooltipContainer = {

    imgLocation: $('#welcome-wrap').find('.welcome').children('img'),
    tooltipObject: $('#welcome-wrap').find('.welcome').children('#tooltip')


    };

  $tooltipContainer.imgLocation.on('mouseover', function(){

    $tooltipContainer.tooltipObject.fadeIn(800);

  setTimeout(function(){

    $tooltipContainer.tooltipObject.fadeOut(800);

  }, 3000)

  });
