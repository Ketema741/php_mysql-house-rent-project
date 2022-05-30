fetch("./realtorsData.json")
    .then(function(resp) {
        return resp.json()
    })
    .then(function(data) {

            for (let i = 0; i < data.length; i++) {

                const realtor = document.getElementById("realtors").innerHTML +=
                    `
            <div class="realtor realtor--${i}"  >
                <div class = "realtor__description">
                    <span class = "realtor__name"> ${data[i].company} </span> 
                    <span class = "realtor__IsNew" style="border:none; display:${(data[i].new)? 'inline' : 'none'} ">active </span> 
                    <span class = "realtor_IsFeatured" style="display:${(data[i].featured)? 'inline' : 'none'} ">inactive</span> 
                    </div>
                    <img src="${data[i].logo}" alt="" class="realtor__image">
                    <div class="realtor__info">
                        <ul class="realtor__work">
                            <li class="realtor__time">${data[i].postedAt}</li>
                            <li class="realtor__workType">${data[i].contract}</li>
                            <li class="realtor__workPlace">${data[i].location}</li>
                        </ul>
                    </div>
                    <div class="divider"></div>
                    <div class="realtor__experience">
                    ${data[i].address.map(address=>`<span class="realtor__skill">${address}</span>`).join("")}
                    </div> 
                </div>
                `
        }
    })