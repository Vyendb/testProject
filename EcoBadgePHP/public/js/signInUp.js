
// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyBdBoaCRlumMu_pCXtbgb2dLwa0xJawQQk",
    authDomain: "comp2003group-t.firebaseapp.com",
    databaseURL: "https://comp2003group-t-default-rtdb.europe-west1.firebasedatabase.app",
    projectId: "comp2003group-t",
    storageBucket: "comp2003group-t.appspot.com",
    messagingSenderId: "180755120515",
    appId: "1:180755120515:web:0910b7433e6f3b25c2b6b6",
    measurementId: "G-GQY0B3BT6Y"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
const auth =  firebase.auth();

//signUp function
function signUp(){
    var email = document.getElementById("email");
    var password = document.getElementById("password");

    const promise = auth.createUserWithEmailAndPassword(email.value,password.value);
    //
    promise.catch(e=>alert(e.message));
    alert("SignUp Successful");

}

//signIn function
function signIn(){
    var email = document.getElementById("email");
    var password  = document.getElementById("password");
    const promise = auth.signInWithEmailAndPassword(email.value,password.value)

}

//signOut
function signOut(){
    auth.signOut();

}

firebase.auth().onAuthStateChanged((user) => {
    if (user) {
        // User is signed in, see docs for a list of available properties
        // https://firebase.google.com/docs/reference/js/firebase.User
        location.href = "../public/accountPage.html";
    } else {
        // User is signed out
        location.href = "../public/signInUp.html";
    }

});


