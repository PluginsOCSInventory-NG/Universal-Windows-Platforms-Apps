$UWPapps = Get-AppxPackage -AllUsers | Select *

foreach ($package in $UWPapps){
		$xml += "<UWPAPPS>`n"
		$xml += "<UWPAPPNAME>" + $package.Name + "</UWPAPPNAME>`n"
		$xml += "<UWPAPPARCH>" + $package.Architecture + "</UWPAPPARCH>`n"
		$xml += "<UWPAPPVERSION>" + $package.Version + "</UWPAPPVERSION>`n"
		$xml += "<UWPAPPFULLNAME>" + $package.PackageFullName + "</UWPAPPFULLNAME>`n"
		$xml += "<UWPAPPSTATUS>" + $package.Status + "</UWPAPPSTATUS>`n"
		$xml += "<UWPAPPPUBL>" + $package.Publisher + "</UWPAPPPUBL>`n"
		$xml += "<UWPAPPINSTLOC>" + $package.InstallLocation + "</UWPAPPINSTLOC>`n"
		$xml += "</UWPAPPS>`n"
}

# Force UTF8 enconding
[Console]::OutputEncoding = [System.Text.Encoding]::UTF8
[Console]::WriteLine($xml)
