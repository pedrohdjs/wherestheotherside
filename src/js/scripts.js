document.addEventListener("DOMContentLoaded",async (ev) => {
    if (navigator.geolocation){
        navigator.geolocation.getCurrentPosition(positionHandler);
    }
    else {
        fadeToLeft(document.querySelectorAll("#welcome-message"));
        addH3fadeIn("Unfortunately, geolocation is not supported by your browser.");
    }
})

async function positionHandler(position) {
    const content = document.getElementById("content");
    await fadeToLeft(document.getElementById("welcome-message"),500);

    const coords = {
        "latitude": position.coords.latitude,
        "longitude": position.coords.longitude
    };
    const coordinatesString = `Apparently, your approximate coordinates are ${coords.latitude}, ${coords.longitude}`;
    await addH3fadeIn(content,coordinatesString,1500);

    const locationRes = await fetch("./API/location?latitude="+ coords.latitude + "&longitude=" + coords.longitude);
    const location = await locationRes.json();
    const locationString = `Which means you are acessing this website from ${location.city}, ${location.state}, ${location.country}`;
    await addH3fadeIn(content,locationString,1500);

    const antipodeRes = await fetch("./API/antipode?latitude="+ coords.latitude + "&longitude=" + coords.longitude);
    const antipodeCoords = await antipodeRes.json();
    const antipodeCoordsString = `That means that the other side of the world is located in ${antipodeCoords.latitude}, ${antipodeCoords.longitude}`;
    await addH3fadeIn(content,antipodeCoordsString,1500);

    const antipodeLocationRes = await fetch("./API/location?latitude="+ antipodeCoords.latitude + "&longitude=" + antipodeCoords.longitude);
    const antipodeLocation = await antipodeLocationRes.json();
    const antipodeLocationString = (antipodeLocation.isWater) ? "Which is actually just a bunch of water." : `Which is located in ${antipodeLocation.city}, ${antipodeLocation.state}, ${antipodeLocation.country}`;
    await addH3fadeIn(content,antipodeLocationString,1500);

}