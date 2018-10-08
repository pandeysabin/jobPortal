function string() {
    var a = document.getElementById('email').value;
    for (var i = 0; i < a.length; i++) 
    {
        var c = str.charAt(a);
        if (c != '@') {
            var b = b + c;
        }
        else {
            document.getElementById('user').value = b;
            return true;
        }
    }
    document.write(a);
    // return false;
    
}