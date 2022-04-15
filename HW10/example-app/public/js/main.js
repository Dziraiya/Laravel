$(document).ready(function () {
    $('.delete-btn').on('click', function () {
        const res = confirm('Подтвердите действие')
        if (!res) {
            return false
        }
    })
})
