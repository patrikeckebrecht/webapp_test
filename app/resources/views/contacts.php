<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Manager</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">  </script>

    <script src="https://vuejs.org/js/vue.js"></script>
    <script src="https://unpkg.com/vuex@3.0.1/dist/vuex.js"></script>

    <script src="store.js"></script>
    <script src="components.js"></script>
    <script src="app.js"></script>
</head>
<body>
    <table id="contacts">
        <tr>
            <th>Vorname</th>
            <th>Nachname</th>
            <th>Telefon</th>
            <th>Geburtstag</th>
            <th>Level</th>
        </tr>
        <template v-for="contact in contactdata">
            <tr>
                <td>{{contact.first_name}}</td>
                <td>{{contact.last_name}}</td>
                <td>{{contact.phone}}</td>
                <td>{{contact.birthdate}}</td>
                <td>{{contact.level}}</td>
                <td><button onclick="deleteContact(this.value)" :value="contact.id">Delete</button></td>
            </tr>
        </template>
        <tr>
            <td><input type="text" id="create_first_name"/></td>
            <td><input type="text" id="create_last_name"/></td>
            <td><input type="text" id="create_phone"/></td>
            <td><input type="text" id="create_birthdate"/></td>
            <td><input type="text" id="create_level"/></td>
        </tr>
    </table>
    <button onclick="app.update()">Update</button>
    <button onclick="create()">Create</button>
</body>
</html>