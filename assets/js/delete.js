let btn_delete_recipe = document.querySelectorAll('.delete-recipe');

for (let i = 0; i < btn_delete_recipe.length; i++) {
    btn_delete_recipe[i].onclick = delete_recipe 	
}

function delete_recipe(e) {
    e.preventDefault()
    let res = confirm("Are you sure");
    if(!res) return
    let id = this.getAttribute('recipe_id')
    location.href = '/recipe/delete?id=' + id;
}

let btn_tag_delete = document.querySelectorAll('.tag-delete');

for (let i = 0; i < btn_tag_delete.length; i++) {
    btn_tag_delete[i].onclick = delete_tag
}

function delete_tag(e) {
    e.preventDefault()
    let res = confirm("Are you sure");
    if(!res) return
    let id = this.getAttribute('tag_id')
    location.href = '/tag/delete?id=' + id;
}

let btn_tool_delete = document.querySelectorAll('.tool-delete');

for (let i = 0; i < btn_tool_delete.length; i++) {
    btn_tool_delete[i].onclick = delete_tool
}

function delete_tool(e) {
    e.preventDefault()
    let res = confirm("Are you sure");
    if(!res) return
    let id = this.getAttribute('tool_id')
    location.href = '/tool/delete?id=' + id;
}