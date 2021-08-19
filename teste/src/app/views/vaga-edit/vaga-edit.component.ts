import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { DataService } from 'src/app/service/data.service';
import { Vaga } from '../class/vaga';

@Component({
  selector: 'app-vaga-edit',
  templateUrl: './vaga-edit.component.html',
  styleUrls: ['./vaga-edit.component.css']
})
export class VagaEditComponent implements OnInit {
  id:any;
  vagas:any;
  vaga = new Vaga();
  linguagems: any;

  constructor(
    private route:ActivatedRoute,
    private dataService: DataService,
    private router: Router) { }

  ngOnInit(): void {
    this.id=this.route.snapshot.params.id;
    this.getVagasId();
    this.ListarLinguagem();
  }

  getVagasId(){
    this.dataService.getVagasId(this.id).subscribe(res =>{
      this.vagas=res;
      this.vaga = this.vagas;
      console.log(this.vaga);
    })
  }

  updateVagas(){
    this.dataService.updateVagas(this.id, this.vaga).subscribe(res =>{
      this.router.navigate(['vaga'])
    })
  }

  ListarLinguagem() {
    this.dataService.ListarLinguagem().subscribe(res => {
      this.linguagems = res;
    });
  }
}
