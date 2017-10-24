var app = {
    // Application Constructor
    initialize: function() {
        this.bindEvents();
    },
    // Bind Event Listeners
    //
    // Bind any events that are required on startup. Common events are:
    // 'load', 'deviceready', 'offline', and 'online'.
    bindEvents: function() {
        document.addEventListener('deviceready', this.onDeviceReady, false);
    },
    // deviceready Event Handler
    //
    // The scope of 'this' is the event. In order to call the 'receivedEvent'
    // function, we must explicitly call 'app.receivedEvent(...);'
    onDeviceReady: function() {
        app.receivedEvent('deviceready');
		
		
		//document.getElementById("showData").addEventListener("click", processJSON);
   
   document.getElementById("showData").addEventListener("click",alert("hello"));

		
		
    },
    // Update DOM on a Received Event
    receivedEvent: function(id) {
        var parentElement = document.getElementById(id);
        var listeningElement = parentElement.querySelector('.listening');
        var receivedElement = parentElement.querySelector('.received');

        listeningElement.setAttribute('style', 'display:none;');
        receivedElement.setAttribute('style', 'display:block;');

        console.log('Received Event: ' + id);
    }
};




function processJSON(){
	
	var rawFile = new XMLHttpRquest();
	alert("hi");
	rawFile.open("GET",'userData.json',false);
	
	var allText='';
	rawFile.onreadystatechange= function()
	{
		if (rawFile.readyState===4)
		{
			if(rawFile.status===200|| rawFile.status==0)
			{
				allText=rawFile.responseText;
				alert(allText);
			}
		}
	}
	rawFile.send(null);
}