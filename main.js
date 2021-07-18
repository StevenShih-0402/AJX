$(document).ready(function(){
    $('form').submit(function(){
        var typeValue = $('#type').val();
        var nameValue = $('#name').val();

        $.ajax({
            type: 'GET',
            url: 'getDateTime.php',
            data: {name : nameValue,
                   type : typeValue },
            success: function(data){
                $('#date').html($(data).find('date').text());
                $('#myname').html($(data).find('name').text());
            }
        });

        return false;
    });

    $('a.tabs').click(function(){
        $.ajax({
            type: 'GET',
            url: 'postDateTime.php',
            error: function(){
                alert("載入網頁錯誤");
            },
            success: function(){
                alert("載入網頁成功");
            }
        });

        return false;
    });
});