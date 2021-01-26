function update_gold() {
    t = document.getElementById("gold_counter");
    if(t.text == "Gold: 100"){
        t.text = "Gold: 0";
    }else if(t.text == "Gold: 200"){
        t.text = "Gold: 100";
    }else if(t.text == "Gold: 300"){
        t.text = "Gold: 200";
    }else if(t.text == "Gold: 400"){
        t.text = "Gold: 300";
    }else if(t.text == "Gold: 500"){
        t.text = "Gold: 400";
    }else if(t.text == "Gold: 600"){
        t.text = "Gold: 500";
    }else if(t.text == "Gold: 700"){
        t.text = "Gold: 600";
    }else if(t.text == "Gold: 800"){
        t.text = "Gold: 700";
    }else if(t.text == "Gold: 900"){
        t.text = "Gold: 800";
    }else if(t.text == "Gold: 1000"){
        t.text = "Gold: 900";
    }
}
function update_metall() {
    t = document.getElementById("metal_counter");
    if(t.text == "Metall: 100"){
        t.text = "Metall: 0";
    }else if(t.text == "Metall: 200"){
        t.text = "Metall: 100";
    }else if(t.text == "Metall: 300"){
        t.text = "Metall: 200";
    }else if(t.text == "Metall: 400"){
        t.text = "Metall: 300";
    }else if(t.text == "Metall: 500"){
        t.text = "Metall: 400";
    }else if(t.text == "Metall: 600"){
        t.text = "Metall: 500";
    }else if(t.text == "Metall: 700"){
        t.text = "Metall: 600";
    }else if(t.text == "Metall: 800"){
        t.text = "Metall: 700";
    }else if(t.text == "Metall: 900"){
        t.text = "Metall: 800";
    }else if(t.text == "Metall: 1000"){
        t.text = "Metall: 900";
    }
}
function update_energie() {
    t = document.getElementById("energy_counter");
    if(t.text == "Energie: 100"){
        t.text = "Energie: 0";
    }else if(t.text == "Energie: 200"){
        t.text = "Energie: 100";
    }else if(t.text == "Energie: 300"){
        t.text = "Energie: 200";
    }else if(t.text == "Energie: 400"){
        t.text = "Energie: 300";
    }else if(t.text == "Energie: 500"){
        t.text = "Energie: 400";
    }else if(t.text == "Energie: 600"){
        t.text = "Energie: 500";
    }else if(t.text == "Energie: 700"){
        t.text = "Energie: 600";
    }else if(t.text == "Energie: 800"){
        t.text = "Energie: 700";
    }else if(t.text == "Energie: 900"){
        t.text = "Energie: 800";
    }else if(t.text == "Energie: 1000"){
        t.text = "Energie: 900";
    }
}

function big_fake(){
        update_gold();
        update_metall();
        update_energie();
    }


