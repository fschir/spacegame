function update_gold() {
    t = document.getElementById("gold_counter");
    t.text = "Gold: 900";
}
function update_metall() {
    t = document.getElementById("metal_counter");
    t.text = "Metall: 4100";
}
function update_energie() {
    t = document.getElementById("energy_counter");
    t.text = "Energie: 0";
}

function big_fake(){
    update_gold();
    update_metall();
    update_energie();
}