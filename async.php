<?php
header("Content-Type: applicaton/json");
if(!empty($_GET["mode"])){
    $num = (int)$_GET["mode"];
    echo json_encode(
        array(
            "success" => true,
            "content" => '<h1>This is content from an async request. You pushed button '.$num.'.</h1>Morbi suscipit erat eget mauris blandit non ullamcorper libero volutpat. Nam molestie, tortor eget ultricies consectetur, nunc urna sollicitudin nisl, vel blandit ligula nunc quis massa. Etiam aliquet dui sed enim consequat rutrum. Sed eget ante turpis, at tincidunt ante. Ut vitae felis dui. Vivamus dignissim, lacus a feugiat faucibus, purus felis viverra orci, at blandit nisi nulla et neque. Aenean nisi nibh, consequat ac pulvinar in, accumsan non eros. Pellentesque rutrum ornare cursus. Nullam id elit sed nunc consectetur sollicitudin quis mollis metus. In lacus dolor, gravida non posuere viverra, mattis in tortor. Morbi ac pulvinar tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer eget sagittis metus. Etiam turpis turpis, placerat et tempor sed, sodales vel nunc. Morbi molestie, arcu tincidunt egestas tristique, eros mi aliquet massa, at volutpat nunc risus in sem. Mauris metus nisl, venenatis at eleifend in, lacinia sit amet tortor. Duis pulvinar ultricies nisl, at dictum odio gravida sed.'
        )
    );
} else {
    echo json_encode(
        array(
            "success" => true,
            "content" => '<h1>This is content from an async request.</h1>Morbi suscipit erat eget mauris blandit non ullamcorper libero volutpat. Nam molestie, tortor eget ultricies consectetur, nunc urna sollicitudin nisl, vel blandit ligula nunc quis massa. Etiam aliquet dui sed enim consequat rutrum. Sed eget ante turpis, at tincidunt ante. Ut vitae felis dui. Vivamus dignissim, lacus a feugiat faucibus, purus felis viverra orci, at blandit nisi nulla et neque. Aenean nisi nibh, consequat ac pulvinar in, accumsan non eros. Pellentesque rutrum ornare cursus. Nullam id elit sed nunc consectetur sollicitudin quis mollis metus. In lacus dolor, gravida non posuere viverra, mattis in tortor. Morbi ac pulvinar tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer eget sagittis metus. Etiam turpis turpis, placerat et tempor sed, sodales vel nunc. Morbi molestie, arcu tincidunt egestas tristique, eros mi aliquet massa, at volutpat nunc risus in sem. Mauris metus nisl, venenatis at eleifend in, lacinia sit amet tortor. Duis pulvinar ultricies nisl, at dictum odio gravida sed.'
        )
    );
}
?>
