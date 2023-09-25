// connexion.component.ts
import { Component } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';

@Component({
  selector: 'app-connexion',
  templateUrl: './connexion.component.html',
  styleUrls: ['./connexion.component.css']
})
export class ConnexionComponent {
  connexionForm: FormGroup;

  constructor(private fb: FormBuilder) {
    this.connexionForm = this.fb.group({
      username: ['', Validators.required],
      password: ['', Validators.required, Validators.minLength(6)]
    });
  }

  onSubmit() {
    // Logique de soumission du formulaire
  }
}
