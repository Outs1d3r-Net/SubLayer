
rule petya {

        meta: 	
		description = "Pety Malware"
		

        strings: 
		$a = "e99651aa5c5dcf9128adc8da685f1295b959f640a173098d07018b030d529509"
		$b = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/"
		$c = "unicode,38,0x000304E0,-,guid,{C68009EA-1163-4498-8E93-D5C4E317D8CE}"
        condition: 
		any of them
}
