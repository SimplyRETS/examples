/*
 * AJAX Example - Making Requests to the SimplyRETS API
 */


// There are your API Credentials - they get base64 encoded
var auth = btoa("simplyrets:simplyrets");

function main() {
    $.ajax({
        // make an AJAX request - this is the /properties endpoint
        url: "https://api.simplyrets.com/properties",
        type: 'GET',
        dataType: 'json',
        // authorize with the API credentials
        beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", "Basic  " + auth);
        },
        success: function(res) {
            // res is the set of listings returned from the API
            // loop through them and print the address
            for(var i=0; i < res.length; i++) {
                $("#app").append("<p>" + res[i].address.full + "</p>");
            }
        }
    });
}

main();
