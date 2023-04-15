newReloj("#curso-time");

const $temario_lists = document.getElementById("temario-lists");

if ($temario_lists) {
    const $list_items = $temario_lists.querySelectorAll(".list");
    $list_items.forEach(($list_item) => {
        const $btn_toggle = $list_item.querySelector("button");
        $btn_toggle.onclick = (evt) => $list_item.classList.toggle("open");
    });
}
