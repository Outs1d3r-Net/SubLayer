rule fantom {

        meta: description = "Fantom Malware"

        strings: 	
			$a = "1f5ee073608ec05b656ca1924b246908aaa7d57c46a462c0b12907046ee969d2"
			$b = ".?AV_com_error@@"
        condition: any of them
}
