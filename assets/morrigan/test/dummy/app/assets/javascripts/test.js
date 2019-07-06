$(document).ready(function () {
//    editor = $('#test').morrigan_editor();
//    editor.morrigan_editor('html', '<p>ololoфыв фывфыв ф</p><p>ывф вфыв фывфыв</p><div class="mrge-content-block mrge-left-side" contenteditable="false"><div class="mrge-content-block-item"><img src="/images/Chrysanthemum.jpg" style="max-width: 150px; max-height: 270px;"></div></div><p>ф вфыв фывф ывф ывф</p><p>ыв фывф ыв фывф ывфы</p><p>&nbsp;вфыв фыв фывфы вфыв</p><p>ф ывфыв фывф ывф ыв</p><p>фыв фыв фывф ывф ыв</p><p>вфывфывфывфывфывфыв</p><p>фывфывфывфывфывфыв фывф ыв фывф ывфы</p><p>ф ывфв фывфывфы</p><p>вфыв</p><div class="mrge-content-block mrge-left-side" contenteditable="false"><div class="mrge-content-block-item"><img src="/images/Desert.jpg" style="max-width: 150px; max-height: 270px;"></div></div><p>фывфы</p><p>вфвфывфывфыв</p><p>фывфывфывфывфы</p><p>вфывфывфывфывфывфыв</p><p>фывфывфывфывфывф</p><p>ывфывфывфывфывфывфыыв фывф ыв фывф ывфы</p><p>&nbsp;вфыв фыв фывфы вфыв</p><p>фывфывфывфывфы</p><p>вфывфывфывфывфывфыв</p><p>фывфывфывфывфывф</p><p>ывфывфывфывфывфывфы</p><div class="mrge-content-block mrge-left-side" contenteditable="false"><div class="mrge-content-block-item"><img src="/images/Penguins.jpg" style="max-width: 150px; max-height: 270px;"></div></div><p>ывфывфывфывфывфывфы</p>')
//    editor.morrigan_editor('html', '<p>line 1</p><p>line 2</p><p>line 3</p><div class="mrge-content-block mrge-left-side" contenteditable="false" style="max-width: 350px; max-height: 270px;"><div class="mrge-content-block-item" style="max-width: 350px; max-height: 270px;"><img src="/images/Chrysanthemum.jpg" style="max-width: 350px; max-height: 270px;"></div></div><p>line 4</p><p>line<b> 5</b></p><p><b>li<i>ne</i></b> 6</p><p>line 7</p><p>line 8</p><p>line 9</p><p>line 10</p><p>line 11</p><p>line 12</p><p>line 13</p><p>line 14</p><p>line 15</p><p>line 16<br></p><p>line 16</p><p>line 17</p><p>line 18</p><p>line 19</p><div class="mrge-content-block mrge-left-side" contenteditable="false" style="max-width: 350px; max-height: 270px;"><div class="mrge-content-block-item" style="max-width: 350px; max-height: 270px;"><img src="/images/Desert.jpg" style="max-width: 350px; max-height: 270px;"></div></div><p>line 20</p><p>line 21<br></p><p>line 22<br></p><p>line 23</p><p>line 24<br></p><p>line 25<br></p><p>line 26<br></p><p>line 27<br></p><p>line 28<br></p><p>line 29<br></p><p>line 30<br></p><div class="mrge-content-block mrge-left-side" contenteditable="false" style="max-width: 350px; max-height: 270px;"><div class="mrge-content-block-item" style="max-width: 350px; max-height: 270px;"><img src="/images/Penguins.jpg" style="max-width: 350px; max-height: 270px;"></div></div><p>line 31<br></p><p>line 32<br></p><p>line 33</p><p>line 34<br></p><p>line 35<br></p><p>line 36<br></p>');

});

var initPage = function () {
    var toolbox = [
                [
                    ['format'], ['bold', 'italy', 'strike'], ['img', 'video'], ['alignLeft', 'alignCenter', 'alignRight']
                ]
            ];
    editor = $('#test').morrigan_editor( {spellCheck:false, width:'770px', height:'550px', imageUpload:'/image/create'} );
    var html = '<h2 style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>' +
    '<div class="mrge-content-block mrge-left-side" contenteditable="false" style="max-width: 350px; max-height: 270px;"><div class="mrge-content-block-item" style="max-width: 350px; max-height: 270px;"><img src="/images/Chrysanthemum.jpg" style="max-width: 350px; max-height: 270px;"></div></div>' +
    "<p> Aenean non augue eget odio sagittis accumsan vitae quis felis. In luctus lectus mi, commodo dignissim velit venenatis nec. Mauris id augue odio. Nulla sollicitudin lorem ac nibh consequat, vitae interdum nulla mattis. Etiam viverra dui in est aliquet, lacinia semper felis egestas. Donec iaculis bibendum quam ut viverra. Suspendisse non imperdiet enim. Nunc ut lacus sed nibh iaculis ornare. Nullam sit amet nunc massa. Ut tincidunt posuere viverra. Cras vel luctus ante. Ut iaculis vestibulum dolor eu bibendum. Praesent et mauris tellus. Quisque ac lectus ipsum.</p>" +
    "<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce eu ante id leo pellentesque malesuada quis non lorem. Nam commodo et nulla nec consectetur. Sed non dapibus nisl. Praesent eget facilisis neque. Nulla in auctor tellus. Proin ac sem congue dolor elementum condimentum non et sem.</p>" +
    "<h3>Curabitur scelerisque leo lorem, non hendrerit lacus hendrerit at.</h3>" +
        '<div class="mrge-content-block mrge-left-side" contenteditable="false" style="max-width: 350px; max-height: 270px;"><div class="mrge-content-block-item" style="max-width: 350px; max-height: 270px;"><iframe width="640" height="360" src="//www.youtube.com/embed/oGgIYyG4u0k?feature=player_detailpage&wmode=opaque" frameborder="0" allowfullscreen="" wmode="Opaque" style="width: 350px; height: 205px;"></iframe></div></div>' +
    "<p> Etiam auctor augue non augue lacinia, sit amet sollicitudin dolor rhoncus. Sed feugiat nulla nec lacus volutpat aliquet. Aenean sapien erat, pulvinar sed fringilla in, scelerisque quis tellus. Ut blandit vehicula sodales. Vivamus placerat urna dolor, eget cursus est commodo at. Nullam vitae libero mi.</p>" +
    "<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras lobortis vitae mi nec placerat. Fusce aliquam elit eget luctus tristique. Proin ultricies vehicula leo, id luctus dui ultricies et. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam eget iaculis lorem, in imperdiet sapien. Aenean a nibh cursus, ultricies metus ut, consectetur mi. Nulla facilisi. Mauris placerat aliquam lorem ac lacinia. Sed a nulla viverra, suscipit orci quis, gravida dui. Quisque non massa sem</p>" +
    "<p>Mauris scelerisque, lacus eu dictum pharetra, sem lacus feugiat justo, ut eleifend leo mi tristique mauris. Sed varius pretium porta. Aenean nec neque vitae metus venenatis dapibus vel convallis massa. Etiam id mauris ullamcorper, dapibus turpis nec, volutpat magna. Vestibulum mollis pharetra adipiscing. Quisque euismod mi fringilla mi ultrices venenatis. Ut vel orci sapien. Nulla tempus metus eleifend tempor euismod.</p>" +
    "<h3>Duis laoreet vulputate velit non vulputate.</h3>" +
        '<div class="mrge-content-block mrge-left-side" contenteditable="false" style="max-width: 350px; max-height: 270px;"><div class="mrge-content-block-item" style="max-width: 350px; max-height: 270px;"><img src="/images/Desert.jpg" style="max-width: 350px; max-height: 270px;"></div></div>' +
    "<p> In non enim eu leo iaculis venenatis in iaculis purus. Maecenas vitae placerat dui. Sed mattis felis lacinia, pellentesque nisl nec, scelerisque nulla. Fusce lobortis aliquam massa eget fermentum. Cras quis tellus nec ligula tristique pretium. Nulla non urna quis sapien luctus aliquet ut et turpis. Donec consectetur ac velit at rutrum. Nullam feugiat, neque ac lacinia vehicula, elit orci commodo purus, nec semper velit nibh in turpis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean sed lectus orci. Pellentesque laoreet non ipsum nec ultricies.</p>" +
    "<h3>Curabitur ullamcorper hendrerit felis.</h3><p> Sed scelerisque eleifend lectus, nec molestie tortor vulputate vitae. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus eu lectus at odio tempus suscipit. Nam tincidunt luctus posuere. Sed eget velit commodo, dictum purus porttitor, interdum tortor. Sed luctus augue non massa suscipit tincidunt. Donec ac pulvinar ligula. Vivamus convallis, nunc eu iaculis scelerisque, lectus dui pretium metus, quis egestas dui est sed mauris. Cras id velit aliquam, molestie arcu eu, ornare massa. Aliquam tempus accumsan purus, laoreet iaculis ante ultrices ut.</p>" +
    "<p>Nulla ut feugiat purus, vel ullamcorper mi. Suspendisse dapibus elit ut congue mattis. Nunc malesuada ut dolor vitae cursus. Morbi at facilisis erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam sodales neque et leo fermentum imperdiet. In id ipsum eu nisl blandit iaculis. Cras tristique lectus et ipsum mollis commodo. Cras id dui velit. Etiam volutpat eleifend justo. Praesent et sodales tellus, quis fringilla quam. Ut nec elementum enim. Nam fermentum massa quis velit viverra scelerisque. In hac habitasse platea dictumst. Vestibulum aliquam risus nec ante elementum pulvinar. Phasellus malesuada tellus lacus, et vehicula est convallis in.</p>"
    editor.morrigan_editor('html', html);
};

$(document).ready(function () {
    initPage();
});

$(window).bind('page:change', function() {
    initPage();
});

