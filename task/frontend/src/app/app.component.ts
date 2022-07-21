import { Component } from '@angular/core';
import {HttpClient} from '@angular/common/http';
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {

  constructor(private http:HttpClient) { }

  covidresult:any

  ngOnInit(): void {
    
    // console.log("form",this.regForm)
    this.http.get('http://localhost/test/phpapi.php').subscribe((result)=>{ 

this.covidresult=result
    })

   } 

}
