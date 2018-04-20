
function deleteContact(id) {
    $.ajax({
        url: "api/contacts/delete",
        type: "post",
        data: {
            "id": id
        },
    });
}
function create() {
    $.post("api/contacts", {
        "first_name": $("#create_first_name").val(),
        "last_name": $("#create_last_name").val(),
        "phone": $("#create_phone").val(),
        "birthdate": $("#create_birthdate").val(),
        "level": $("#create_level").val(),
    }).success(function() {
        app.update();

        $("#create_first_name").val("");
        $("#create_last_name").val("");
        $("#create_phone").val("");
        $("#create_birthdate").val("");
        $("#create_level").val("");
    });
}

window.addEventListener("load", function () {
    var store = new Vuex.Store({
        state: { contactdata: [
                {id: 1, first_name: "a", last_name: "s", phone: "+49 d89", birthdate: "200f", level: 3},
                {id: 2, first_name: "a", last_name: "s", phone: "+49 d89", birthdate: "200f", level: 3},
            ]
        },
        mutations: {
            updateContacts(state, payload) {
                state.contactdata = payload;
            }
        },
        actions: {
            update() {
                fetch('http://web.test/api/contacts')
                    .then(function (response) {
                        return response.json();
                    })
                    .then(function (response) {
                        context.commit('updateContacts', response);
                    });
            }
        }
    });

    app = new Vue({
        el: '#contacts',
        data: store.state,
        methods: {
            update() {
                fetch('http://web.test/api/contacts')
                    .then(function (response) {
                        return response.json();
                    })
                    .then(function (response) {
                        store.commit('updateContacts', response);
                        // this.data = {contactdata: response};
                    });
            }
        }
    });
});