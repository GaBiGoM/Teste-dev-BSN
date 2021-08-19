import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { DataService } from 'src/app/service/data.service';
import { Linguagem } from '../class/linguagem';

@Component({
  selector: 'app-linguagem-edit',
  templateUrl: './linguagem-edit.component.html',
  styleUrls: ['./linguagem-edit.component.css']
})
export class LinguagemEditComponent implements OnInit {
id:any;
linguagems:any;
linguagem = new Linguagem;

  constructor(
    private route:ActivatedRoute,
    private dataService:DataService,
    private router:Router) { }

  ngOnInit(): void {
    this.id=this.route.snapshot.params.id;
    this.ListarLinguagem();

  }
  ListarLinguagem(){
    this.dataService.getLinguagemId(this.id).subscribe(res =>{
      this.linguagems = res ;
      this.linguagem = this.linguagems;
    })
  }
  updateLinguagem(){
    this.dataService.updateLinguagem(this.id,this.linguagem).subscribe(res =>{
      this.router.navigate(['linguagem'])
    })
  }
}
