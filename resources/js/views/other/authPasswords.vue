<template>
    <div>
        <div class="tabs single-use">
            <ul>
                <li><a>Authenticate Password</a></li>
            </ul>
        </div>
        <form @submit.prevent="submit">
            <div class="field">
                <div class="control">
                    <input class="input" type="text" placeholder="Reader ID" v-model="form.id">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <input class="input" type="text" placeholder="Password" v-model="form.password">
                </div>
            </div>
            <div class="field">
                <p class="control has-text-right">
                    <button class="button is-primary" v-bind:class="{ 'is-loading': loading }"> Submit</button>
                </p>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                form: {
                    id: '',
                    password: '',
                }
            }
        },
        methods: {
            submit: function () {
                this.$store.commit('startLoading');

                axios.post('/api/other/auth-passwords', this.form )
                    .then((response) => {
                        this.$store.commit('setResponse', response.data);
                    })
                    .catch((error) => {
                        if (error.response) {
                            this.toast('error', error.response.data.message);
                        }
                    })
                    .then(() => {
                        this.$store.commit('stopLoading');
                    });
            }
        },
    }
</script>