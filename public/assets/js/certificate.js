function certificateTab(item,id)
{
    console.log(item,id);
    if(item.getElementsByClassName("certificate-activeTab")[0].style.display == "none")
    {
        // hide any active div
        let array = document.getElementsByClassName("certificate-tab");
        for (let index = 0; index < array.length; index++) {
            array[index].getElementsByClassName("certificate-activeTab")[0].style.display = "none";
            array[index].getElementsByClassName("certificate-nonactiveTab")[0].style.display = "inline-block";
        }
        // display active div
        item.getElementsByClassName("certificate-activeTab")[0].style.display = "inline-block";
        item.getElementsByClassName("certificate-nonactiveTab")[0].style.display = "none";

        let arr = document.getElementsByClassName("cert-content-div");
        for (let i = 0; i < arr.length; i++) {
            arr[i].style.display = "none";
        }
        // check item id and change text
      
           document.getElementById(id).style.display = "flex";
       
        
    }
  

}