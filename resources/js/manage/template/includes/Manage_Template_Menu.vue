<template>

    <q-list>

        <q-item clickable v-ripple :to="{name : 'dashboard'}">
            <q-item-section avatar>
                <q-icon color="indigo" name="mdi-view-dashboard" />
            </q-item-section>
            <q-item-section>Dashboard</q-item-section>
        </q-item>

        <q-expansion-item :content-inset-level="0.3" expand-separator icon="mdi-account-group" label="Users">

            <q-item clickable v-ripple :to="{name : 'users_managers'}">
                <q-item-section avatar>
                    <q-icon color="indigo" name="mdi-account-tie" />
                </q-item-section>
                <q-item-section>Managers</q-item-section>
            </q-item>

            <q-item clickable v-ripple :to="{name : 'users_members'}">
                <q-item-section avatar>
                    <q-icon color="indigo" name="mdi-bluetooth" />
                </q-item-section>
                <q-item-section> Members </q-item-section>

            </q-item>

        </q-expansion-item>

        <q-item clickable v-ripple :to="{name : 'faqs'}">
            <q-item-section avatar>
                <q-icon color="indigo" name="mdi-help" />
            </q-item-section>
            <q-item-section>Faqs</q-item-section>
        </q-item>

    </q-list>
</template>

<script>
export default {
    name: "Manage_Template_Menu"
}
</script>

<style scoped>

</style>
