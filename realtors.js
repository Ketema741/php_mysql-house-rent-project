fetch("./realtorsData.json")
    .then(function(resp) {
        return resp.json()
    })
    .then(function(data) {

        for (let i = 0; i < data.length; i++) {

            const realtor = document.getElementById("realtors").innerHTML +=
                `
                <div class="feature">
                            <img class="feature__icon realX" src="img/${data[i].image}" alt="realtor image">
                            <h4 class="realtor__name">${data[i].name}</h4>
                            <p class="feature__text">${data[i].house_sold}</p>
                            <p class="feature__text realtor__active">Active: ${data[i].active}</p>
                            <p class="feature__text realtorX__text">Lives in: ${data[i].location}</p>
                            <p class="feature__text ">${data[i].email}</p>
                            <p class="feature__text ">${data[i].phone}</p>
                        </div>
                `
        }
    })