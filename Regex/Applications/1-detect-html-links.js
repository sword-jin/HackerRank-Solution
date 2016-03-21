function processData(input) {
    var regex = /<a.*?href="(.*?)".*?>(.*?)<\/a>/ig;
    var output = [];
    input.replace(regex, function(_, href, text){
        output.push(href.trim() + ',' + text.replace(/<.*?>/g,'').trim())
    });
    console.log(output.join('\n'));
}
