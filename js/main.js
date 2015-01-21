$(document).ready(function(){

 //createElement Container.

  //container article -> '#help'


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

    form_register: $('#help').find('#form_register').children('form[name="form_register"]')

  };//form-selectors end

  $buttons = [];

  $buttons = {

    button_register: $('#help').find('#form_register').children('.backButton')

   };


  //button one
  if(typeof $selectors.list_one !== 'undefined'){

    $selectors.list_one.on('click',function(){

    $selectors.list_two.fadeOut(10);
    $selectors.list_three.fadeOut(10);
    $container.content.css({'height':'500px'});
    $container.footer.css({'position' : 'relative', 'marginTop' : '50px'});
    $form_selector.form_register.slideDown(800);
    $buttons.button_register.fadeIn(100);


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
    $buttons.button_register.fadeIn(100);


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
    $buttons.button_register.fadeIn(100);


  });

}else{

  alert('An error was found.');

};

//clear button
$buttons.button_register.on('click', function(){

    $selectors.list_one.fadeIn(100);
    $selectors.list_two.fadeIn(100);
    $selectors.list_three.fadeIn(100);
    $form_selector.form_register.fadeOut(80);
    $buttons.button_register.fadeOut(100);


  });

});
