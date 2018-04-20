<template v-for="contact in contacts">
    <tr>
        <td>{{contact.first_name}}</td>
        <td>{{contact.last_name}}</td>
        <td>{{contact.phone}}</td>
        <td>{{contact.birthdate}}</td>
        <td>{{contact.level}}</td>
    </tr>
</template>

<script>
    import Store from '../store/store'
    import { getCount } from '../store/getters'
    export default {
        store: Store,
        vuex: {
            getters: {
                counter: getCount
            }
        }
    }
</script>