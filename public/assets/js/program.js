function programTab(item)
{
    if(item.getElementsByClassName("activeTab")[0].style.display == "none")
    {
        // hide any active div
        let array = document.getElementsByClassName("program-tab");
        for (let index = 0; index < array.length; index++) {
            array[index].getElementsByClassName("activeTab")[0].style.display = "none";
            array[index].getElementsByClassName("nonactiveTab")[0].style.display = "block";
        }
        // display active div
        item.getElementsByClassName("activeTab")[0].style.display = "block";
        item.getElementsByClassName("nonactiveTab")[0].style.display = "none";
        // check item id and change text
        let arr = document.getElementsByClassName("card mb-3 service-block1");
        for (let i = 0; i < arr.length; i++) {
            arr[i].style.display = "none";
        }
        // check item id and change text
console.log(item.id);
        document.getElementById('s'+item.id).style.display = "block";


    }





}