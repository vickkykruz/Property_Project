import 'package:firebase_core/firebase_core.dart';
import 'package:flutter/foundation.dart';

Future initFirebase() async {
  if (kIsWeb) {
    await Firebase.initializeApp(
        options: FirebaseOptions(
            apiKey: "AIzaSyDVyo6P2ZLU1atdWF-7a0TjjvaHvPFr9X4",
            authDomain: "blazeapp-d9447.firebaseapp.com",
            projectId: "blazeapp-d9447",
            storageBucket: "blazeapp-d9447.appspot.com",
            messagingSenderId: "384364189688",
            appId: "1:384364189688:web:a70f2e2b98001bd0f4a80d",
            measurementId: "G-HZNNHEWB5V"));
  } else {
    await Firebase.initializeApp();
  }
}
