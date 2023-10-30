<template>
    <div>
        <v-container>
            <v-row justify="center">
                <v-col xl="4" lg="4" md="6" sm="12"> 
                    <router-link to="/">
                        <v-btn text color="secondary" class="my-3">
                            Go back
                        </v-btn>
                    </router-link>
                    <v-card class="my-3">
                        <v-card-title> Insert Books</v-card-title>
                        <v-card-subtitle>
                            <v-text-field label="Enter the author's name">

                            </v-text-field>
                            <v-text-field label="Enter the book's title">

                            </v-text-field>
                            <v-text-field label="Enter the book's tags">

                            </v-text-field>
                            <v-btn justify="center" width=100% color="primary" class="my-3">Submit</v-btn>
                        </v-card-subtitle>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>

<script>
export default{
    name:"CreateAuthor",
}
</script>