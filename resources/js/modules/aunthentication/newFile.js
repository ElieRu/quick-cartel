import axios from "axios";

export default (await import('vue')).defineComponent({
components: {
getInput,
choiceTypeModal
},

data() {
return {
account: {
step1: {
name: "",
email: "",
},
step2: {
type: Boolean,
password: "",
password_confirmation: ""
}
},

link: '',
linkValue: '',

label1: '',
label2: '',
success: false,

choice_type: Boolean,

dataBsTargetValue: '',
dataBsToggleValue: '',
errors: null,

param: {
name: ['name', 'email'],
value: ['', ''],
},

password: {
name: ['password', 'password_confirmation'],
value: ['', ''],
},

nextStep: '',

invalidForm: ['', '']
};
},

mounted() {
// console.log(this.validation)
// this.lastStep ()
},

computed: {},

methods: {
step1() {
axios.post(`/api/account_register`, this.$store.getters.value(this.param.value, this.param.name))
.then((response) => {
this.nextStep = response.data.nextStep;
});

return this.nextStep;
},

lastStep() {
let passwords = Object;
passwords = this.$store.getters.value(this.password.value, this.password.name);

let invalidForm = ['', ''];

let invalidForm;
if (passwords.password === '' || passwords.password_confirmation === '') {
this.label2 = 'Formulaire invalide';
return invalidForm;
} else {
if (passwords.password.length >= 8) {
if (passwords.password === passwords.password_confirmation) {
return ['#choice-type-modal', 'modal'];
} else {
this.label2 = 'Confirmation incorrecte';
return invalidForm;
}
} else {
this.label2 = 'Entrez au moin 8 caractères';
return invalidForm;
}
}
},

myLabel() {
// if (this.validation) {
// return this.validation ? ['#choice-type-modal', 'modal'] : ['', '']
return ['#choice-type-modal', 'modal'];
// } else {
//     return ['', '']
// }
},

fetchingAccountType(type) {

console.log(this.$store.getters.value(this.password.value, this.password.name));

// this.account.step2.type = type
// this.validAccount = Object.assign({}, this.account.step1, this.account.step2)
// axios.post(`/api/step2`, this.validAccount)
// .then((response) => {
//     this.label2 = response.data.password_confirmation
//     // Call a modal in case of null value returned
// }).catch((errors) => {
//     if (errors.response.data.errors.type) {
//         this.dataBsTargetValue = '#choice-type-modal'
//         this.dataBsToggleValue = 'modal'
//     } else if (errors.response.data.errors.email[0] == 'existed') {
//         // It does'nt recognize the *errors.response.data.errors.email[0]
//         // to manipulate value
//         this.label2 = "L'adresse mail existe déjà"
//     } else {
//         this.label2 = "Formulaire incorecte"
//     }
// })
},
// displayModal () {
//     this.dataBsTargetValue = '#choice-type-modal'
//     this.dataBsToggleValue = 'modal'
// },
// formValid () {
//     console.log(this.para.values)
//     // console.log(this.values2)
// }
}
});
