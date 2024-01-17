$(document).ready(function() {
    //Tim tat các li có sub-menu và thêm vài nó class has-child
    $(`.sub-menu`).parent(`li`).addClass('has-child');
});