	
	function fja(){
		var zinute, a;
		a = document.getElementById("naujas").value;
		zinute = document.getElementById("zinute");
		zinute.innerHTML = "";
		try{
			if (a == "") throw a;
			a = Number(a);
			if(a<10) throw " per mazas";
			if(a>20) throw " per didelis";

		}
		catch(klaida){
			zinute.innerHTML = "skaicius ivestas " + klaida;
		}
	}
	