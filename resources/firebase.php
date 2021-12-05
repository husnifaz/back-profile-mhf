<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-firestore.js"></script>

<script>
    var firebaseConfig = {
        apiKey: "AIzaSyAayvK7b-FDmHejtkfrN3cI-Xbv7z95qCo",
        authDomain: "profile-web-c2761.firebaseapp.com",
        databaseURL: "https://profile-web-c2761.firebaseio.com",
        projectId: "profile-web-c2761",
        storageBucket: "profile-web-c2761.appspot.com",
        messagingSenderId: "815845439907",
        appId: "1:815845439907:web:80843c1b04bbb5b95c8216",
        measurementId: "G-TWK9E61L4M"
    };
    // Initialize Firebase
    app = firebase.initializeApp(firebaseConfig);

    db = firebase.firestore(app);
</script>