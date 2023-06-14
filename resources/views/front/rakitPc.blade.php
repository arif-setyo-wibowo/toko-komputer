@extends('front.layout.navbar')

@section('content')
    <!-- Page Introduction Wrapper -->
    <div class="page-style-a">
        <div class="container">
            <div class="page-intro">
                <h2>Simulasi Rakit Pc</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="/">Home</a>
                    </li>
                    <li class="is-marked">
                        <a>Rakit Pc</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Introduction Wrapper /- -->
    <!-- FAQ-Page -->
    <div class="page-faq u-s-p-t-80">
        <div class="container">
            <div style="margin-bottom:30px;">
                <h3 class="sec-maker-h3">Cek Kompabilitas Motherboard</h3>
                <hr>
            </div>
            <div class="row "style="margin-top:15px;">
                <div class="col-md-9 pl-3 pr-3" style="margin-top:-10px;">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Pilih Motherboard</label>
                        <select class="col-md-9 form-control select2" id="selMobo">
                        </select>
                    </div>
                </div>

                <div class="col-md-3 pl-3 pr-3" style="margin-top:-10px;">
                    <div class="form-group row">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Rp.
                                </span>
                            </div>
                            <input type="text" disabled class="form-control" id="moboPrice" value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row "style="margin-top:15px;">
                <div class="col-md-9 pl-3 pr-3" style="margin-top:-10px;">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Pilih Processor</label>
                        <select disabled class=" col-md-9 form-control select2" id="selProce">
                        </select>
                    </div>
                </div>

                <div class="col-md-3 pl-3 pr-3" style="margin-top:-10px;">
                    <div class="form-group row">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Rp.
                                </span>
                            </div>
                            <input type="text" disabled class="form-control" id="processorPrice" value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row "style="margin-top:15px;">
                <div class="col-md-9 pl-3 pr-3" style="margin-top:-10px;">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Pilih RAM</label>
                        <select disabled class=" col-md-9 form-control select2" id="selRam">
                        </select>
                    </div>
                </div>

                <div class="col-md-3 pl-3 pr-3" style="margin-top:-10px;">
                    <div class="form-group row">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Rp.
                                </span>
                            </div>
                            <input type="text" disabled class="form-control" id="memoryPrice" value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row "style="margin-top:15px;">
                <div class="col-md-9 pl-3 pr-3" style="margin-top:-10px;">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Pilih SSD</label>
                        <select disabled class=" col-md-9 form-control select2" id="selSsd">
                        </select>
                    </div>
                </div>

                <div class="col-md-3 pl-3 pr-3" style="margin-top:-10px;">
                    <div class="form-group row">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Rp.
                                </span>
                            </div>
                            <input type="text" disabled class="form-control" id="ssdPrice" value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row "style="margin-top:15px;">
                <div class="col-md-9 pl-3 pr-3" style="margin-top:-10px;">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Pilih Harddisk</label>
                        <select disabled class=" col-md-9 form-control select2" id="selHdd">
                        </select>
                    </div>
                </div>

                <div class="col-md-3 pl-3 pr-3" style="margin-top:-10px;">
                    <div class="form-group row">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Rp.
                                </span>
                            </div>
                            <input type="text" disabled class="form-control" id="hddPrice" value="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Componen -->
            <div style="margin-bottom:30px; margin-top:35px;">
                <h3 class="sec-maker-h3">Cek Kompabilitas Casing</h3>
                <hr>
            </div>

            <div class="row "style="margin-top:15px;">
                <div class="col-md-9 pl-3 pr-3" style="margin-top:-10px;">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Pilih Casing</label>
                        <select disabled class=" col-md-9 form-control select2" id="selCase">
                        </select>
                    </div>
                </div>

                <div class="col-md-3 pl-3 pr-3" style="margin-top:-10px;">
                    <div class="form-group row">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Rp.
                                </span>
                            </div>
                            <input type="text" disabled class="form-control" id="casePrice" value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row "style="margin-top:15px;">
                <div class="col-md-9 pl-3 pr-3" style="margin-top:-10px;">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Pilih Cooler</label>
                        <select disabled class=" col-md-9 form-control select2" id="selCooler">
                        </select>
                    </div>
                </div>

                <div class="col-md-3 pl-3 pr-3" style="margin-top:-10px;">
                    <div class="form-group row">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Rp.
                                </span>
                            </div>
                            <input type="text" disabled class="form-control" id="coolerPrice" value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row "style="margin-top:15px;">
                <div class="col-md-9 pl-3 pr-3" style="margin-top:-10px;">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Pilih VGA</label>
                        <select disabled class=" col-md-9 form-control select2" id="selVga">
                        </select>
                    </div>
                </div>

                <div class="col-md-3 pl-3 pr-3" style="margin-top:-10px;">
                    <div class="form-group row">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Rp.
                                </span>
                            </div>
                            <input type="text" disabled class="form-control" id="gpuPrice" value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row "style="margin-top:15px;">
                <div class="col-md-9 pl-3 pr-3" style="margin-top:-10px;">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Pilih PSU</label>
                        <select disabled class=" col-md-9 form-control select2" id="selPsu">
                        </select>
                    </div>
                </div>

                <div class="col-md-3 pl-3 pr-3" style="margin-top:-10px;">
                    <div class="form-group row">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Rp.
                                </span>
                            </div>
                            <input type="text" disabled class="form-control" id="psuPrice" value="">
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <!-- Total Harga -->
            <div class="row "style="margin-top:15px;">
                <div class="col-md-9 p-3" style="margin-top:-10px;">
                    <div class="form-group">
                        <label class="col-md-7"></label>
                        <label class="col-md-2 float-right  col-form-label">Grand Total</label>
                    </div>
                </div>
                <div class="col-md-3 p-3" style="margin-top:-10px;">
                    <div class="form-group row">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Rp.
                                </span>
                            </div>
                            <input type="text" disabled class="form-control" id="grandTotal" value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row "style="margin-top:15px;">
                <div class="col-md-8"></div>
                <div class="col-md-2 p-1">
                    <div class="m-1">
                        <button type="button" id="btnReset" class="btn btn-danger btn-block"><i
                                class="fa fa-trash"></i>
                            Reset</button>
                    </div>
                </div>
                <div class="col-md-2 p-1">
                    <div class="m-1">
                        <button type="button" class="btn btn-success btn-block" id="btn-addtocart-rakit"><i
                                class="ion ion-md-basket"></i>
                            Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('front/') }}/css/adminlte.css">
@endsection
@section('javascript')
    <script>
        let casing = [].concat(@json($case));
        let gpu = [].concat(@json($gpu));
        let memory = [].concat(@json($memory));
        let mobo = [].concat(@json($mobo));
        let psu = [].concat(@json($psu));
        let cpu = [].concat(@json($cpu));
        let storage = [].concat(@json($storage));
        let cooler = [].concat(@json($cooler));

        let loopOpt = (cond, arr, selid, id, name, state, stateif, stateval) => {
            if (state = 1) {
                $(`${selid} option`).remove()
                $(selid).append(`<option selected disabled hidden>Pilih Barang</option>`);
                for (let i = 0; i < arr.length; i++) {
                    if (cond == "=") {
                        if (arr[i][stateif] == stateval) {
                            $(selid).append(`<option value="${arr[i][id]}">${arr[i][name]}</option>`);
                        }
                    } else {
                        if (Number(arr[i][stateif]) > Number(stateval)) {
                            $(selid).append(`<option value="${arr[i][id]}">${arr[i][name]}</option>`);
                        }
                    }
                }
            } else {
                for (let i = 0; i < arr.length; i++) {
                    $(selid).append(`<option value="${arr[i][id]}">${arr[i][name]}</option>`);
                }
            }
        }
        arrFilter = (cond, varAny, selec, arr) => {
            let result
            if (cond == "=") {
                for (let i = 0; i < arr.length; i++) {
                    if (arr[i][selec] == varAny) {
                        result = arr[i]
                    }
                }
            } else {
                for (let i = 0; i < arr.length; i++) {
                    if (Number(arr[i][selec]) > Number(varAny)) {
                        result = arr[i]
                    }
                }
            }
            return result
        }
        let moboTotal = 0,
            cpuTotal = 0,
            memTotal = 0,
            ssdTotal = 0,
            hddTotal = 0,
            caseTotal = 0,
            coolerTotal = 0,
            gpuTotal = 0,
            psuTotal = 0
        countTotal = () => {
            let total = moboTotal + cpuTotal + memTotal + ssdTotal + hddTotal + caseTotal + coolerTotal + gpuTotal +
                psuTotal
            $('#grandTotal').val(total.toLocaleString("id-ID"))
        }

        $('#btnReset').on("click", function() {
            $('#selProce option').remove()
            $('#selProce').attr("disabled", true)
            $('#processorPrice').val("")
            $('#selRam option').remove()
            $('#selRam').attr("disabled", true)
            $('#memoryPrice').val("")
            $('#selSsd option').remove()
            $('#selSsd').attr("disabled", true)
            $('#ssdPrice').val("")
            $('#selHdd option').remove()
            $('#selHdd').attr("disabled", true)
            $('#hddPrice').val("")
            $('#selCase option').remove()
            $('#selCase').attr("disabled", true)
            $('#casePrice').val("")
            $('#selCooler option').remove()
            $('#selCooler').attr("disabled", true)
            $('#coolerPrice').val("")
            $('#selVga option').remove()
            $('#selVga').attr("disabled", true)
            $('#gpuPrice').val("")
            $('#selPsu option').remove()
            $('#selPsu').attr("disabled", true)
            $('#psuPrice').val("")
            moboTotal = 0, cpuTotal = 0, memTotal = 0, ssdTotal = 0, hddTotal = 0, caseTotal = 0, coolerTotal = 0,
                gpuTotal = 0, psuTotal = 0
            $('#grandTotal').val("")
            $('#moboPrice').val("")
            loopOpt("=", mobo, '#selMobo', "moboId", "moboName")
        });

        loopOpt("=", mobo, '#selMobo', "moboId", "moboName")
        let lastProce = "";
        let lastRam = "";
        let lastHdd = false;
        let lastSsd = false;
        let lastCase = "";
        let lastVga = "";
        let lastPsu = "";
        let lastCooler = "";

        $('#selMobo').on("change", function() {
            let temp = arrFilter("=", $(this).val(), "moboId", mobo)
            let moboPrice = Number(temp.moboPrice)
            moboTotal = moboPrice
            let socket = temp.processorSocketId
            let memoType = temp.moboMemoryType
            let sata = temp.moboStorageSata.split(" ")
            let m2 = temp.moboStorageM2.split(" ")
            let ff = temp.moboFormFactor
            $('#moboPrice').val(moboPrice.toLocaleString("id-ID"))
            let cpuTemp = arrFilter("=", socket, "processorSocketId", cpu)
            let memTemp = arrFilter("=", memoType, "memoryType", memory)
            let caseTemp = arrFilter("=", ff, "caseType", casing)

            if (cpuTemp == undefined) {
                $('#selProce').attr("disabled", true)
                $('#selProce option').remove()
                $('#selProce').append(
                    `<option selected disabled hidden>Tidak ada processor yang cocok dengan motherboard.</option>`
                );
                $('#processorPrice').val("")
            } else {
                if (lastProce != socket) {
                    $('#selProce').removeAttr("disabled")
                    $('#processorPrice').val("")
                    loopOpt("=", cpu, '#selProce', "processorId", "processorName", 1, "processorSocketId", socket)
                    lastProce = ""
                }
            }
            if (memTemp == undefined) {
                $('#selRam').attr("disabled", true)
                $('#selRam option').remove()
                $('#selRam').append(
                    `<option selected disabled hidden>Tidak ada memory yang cocok dengan motherboard.</option>`);
                $('#memoryPrice').val("")
            } else {
                if (lastRam != memoType) {
                    $('#selRam').removeAttr("disabled")
                    $('#memoryPrice').val("")
                    loopOpt("=", memory, '#selRam', "memoryId", "memoryName", 1, "memoryType", memoType)
                    lastRam = ""
                }
            }
            if (caseTemp == undefined) {
                $('#selCase').attr("disabled", true)
                $('#selCase option').remove()
                $('#selCase').append(
                    `<option selected disabled hidden>Tidak ada casing yang cocokc dengan motherboard.</option>`
                );
                $('#casePrice').val("")
            } else {
                if (lastCase != ff) {
                    $('#selCase').removeAttr("disabled")
                    $('#casePrice').val("")
                    loopOpt("=", casing, '#selCase', "caseId", "caseName", 1, "caseType", ff)
                    lastCase = ""
                }
            }
            if (Number(sata[2]) == 0) {
                $('#selHdd').attr("disabled", true)
                $('#selHdd option').remove()
                $('#selHdd').append(
                    `<option selected disabled hidden>Motherboard tidak memiliki slot sata</option>`);
                $('#hddPrice').val("")
                lastHdd = false
            } else {
                if (lastHdd == false) {
                    $('#selHdd').removeAttr("disabled")
                    $('#hddPrice').val("")
                    loopOpt("=", storage, '#selHdd', "storageId", "storageName", 1, "storageType", "Harddisk")
                }
            }
            if (Number(m2[2]) == 0) {
                $('#selSsd').attr("disabled", true)
                $('#selSsd option').remove()
                $('#selSsd').append(
                    `<option selected disabled hidden>Motherboard tidak memiliki slot M.2</option>`);
                $('#ssdPrice').val("")
                lastSsd = false
            } else {
                if (lastSsd == false) {
                    $('#selSsd').removeAttr("disabled")
                    $('#ssdPrice').val("")
                    loopOpt("=", storage, '#selSsd', "storageId", "storageName", 1, "storageType", "SSD")
                }
            }
            if (lastCase != ff) {
                $('#selVga').attr("disabled", true)
                $('#gpuPrice').val("")
                $('#selVga option').remove()
                $('#selCooler').attr("disabled", true)
                $('#coolerPrice').val("")
                $('#selCooler option').remove()
                $('#selPsu').attr("disabled", true)
                $('#psuPrice').val("")
                $('#selPsu option').remove()
            }
            countTotal()
        });
        $('#selProce').on("change", function() {
            let temp = arrFilter("=", $(this).val(), "processorId", cpu)
            let processorPrice = Number(temp.processorPrice)
            cpuTotal = processorPrice
            $('#processorPrice').val(processorPrice.toLocaleString("id-ID"))
            lastProce = temp.processorSocketId
            countTotal()
        });
        $('#selRam').on("change", function() {
            let temp = arrFilter("=", $(this).val(), "memoryId", memory)
            let memoryPrice = Number(temp.memoryPrice)
            memTotal = memoryPrice
            $('#memoryPrice').val(memoryPrice.toLocaleString("id-ID"))
            lastRam = temp.memoryType
            countTotal()
        });
        $('#selHdd').on("change", function() {
            let temp = arrFilter("=", $(this).val(), "storageId", storage)
            let storagePrice = Number(temp.storagePrice)
            hddTotal = storagePrice
            $('#hddPrice').val(storagePrice.toLocaleString("id-ID"))
            lastHdd = true
            countTotal()
        });
        $('#selSsd').on("change", function() {
            let temp = arrFilter("=", $(this).val(), "storageId", storage)
            let storagePrice = Number(temp.storagePrice)
            ssdTotal = storagePrice
            $('#ssdPrice').val(storagePrice.toLocaleString("id-ID"))
            lastSsd = true
            countTotal()
        });
        $('#selCase').on("change", function() {
            let temp = arrFilter("=", $(this).val(), "caseId", casing)
            let casePrice = Number(temp.casePrice)
            caseTotal = casePrice
            $('#casePrice').val(casePrice.toLocaleString("id-ID"))
            lastCase = temp.caseType
            let gpuTemp = arrFilter("=", lastCase, "gpuCaseSupport", gpu)
            let coolTemp = arrFilter("=", lastCase, "coolerCaseType", cooler)

            if (gpuTemp == undefined) {
                $('#selVga').attr("disabled", true)
                $('#selVga option').remove()
                $('#selVga').append(
                    `<option selected disabled hidden>Tidak ada VGA yang cocok dengan casing.</option>`);
                $('#gpuPrice').val("")
            } else {
                if (lastVga != lastCase) {
                    $('#selVga').removeAttr("disabled")
                    $('#gpuPrice').val("")
                    loopOpt("=", gpu, '#selVga', "gpuId", "gpuName", 1, "gpuCaseSupport", lastCase)
                    lastVga = ""
                }
            }
            if (coolTemp == undefined) {
                $('#selCooler').attr("disabled", true)
                $('#selCooler option').remove()
                $('#selCooler').append(
                    `<option selected disabled hidden>Tidak ada Cooler yang cocok dengan casing.</option>`);
                $('#coolerPrice').val("")
            } else {
                if (lastCooler != lastCase) {
                    $('#selCooler').removeAttr("disabled")
                    $('#coolerPrice').val("")
                    loopOpt("=", cooler, '#selCooler', "coolerId", "coolerName", 1, "coolerCaseType", lastCase)
                    lastCooler = ""
                }
            }
            countTotal()
        });
        $('#selCooler').on("change", function() {
            let temp = arrFilter("=", $(this).val(), "coolerId", cooler)
            let coolerPrice = Number(temp.coolerPrice)
            coolerTotal = coolerPrice
            $('#coolerPrice').val(coolerPrice.toLocaleString("id-ID"))
            lastCooler = true
            countTotal()
        });
        $('#selVga').on("change", function() {
            let temp = arrFilter("=", $(this).val(), "gpuId", gpu)
            let gpuPrice = Number(temp.gpuPrice)
            gpuTotal = gpuPrice
            $('#gpuPrice').val(gpuPrice.toLocaleString("id-ID"))
            lastVga = true
            let power = temp.gpuPowerReq
            let psuTemp = arrFilter(">", power, "psuPower", psu)

            if (psuTemp == undefined) {
                $('#selPsu').attr("disabled", true)
                $('#selPsu option').remove()
                $('#selPsu').append(
                    `<option selected disabled hidden>Tidak ada PSU yang cocok dengan GPU.</option>`);
                $('#psuPrice').val("")
            } else {
                if (lastVga != power) {
                    $('#selPsu').removeAttr("disabled")
                    $('#psuPrice').val("")
                    loopOpt(">", psu, '#selPsu', "psuId", "psuName", 1, "psuPower", power)
                    lastPsu = ""
                }
            }
            countTotal()
        });
        $('#selPsu').on("change", function() {
            let temp = arrFilter("=", $(this).val(), "psuId", psu)
            let psuPrice = Number(temp.psuPrice)
            psuTotal = psuPrice
            $('#psuPrice').val(psuPrice.toLocaleString("id-ID"))
            lastPsu = true
            countTotal()
        });
    </script>
@endsection
