<div>
    
        <div class="h-auto w-auto mx-20 rounded-2xl bg-[#FAFAFA] mt-28 p-10">
            <div class="grid gap-2 md:grid-cols-2 sm:grid-cols-1sm:justify-center">
                <div>
                    <label for="small" class="block mb-2 text-md font-normal text-gray-900">Filter Bidang Urusan</label>
                    <select name="bidangurusan" wire:model.live="bidangurusan" id="small" class="block w-3/4 p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 ">
                        <option selected>Pilih Bidang Urusan</option>
                        <!-- __BLOCK__ --><?php $__currentLoopData = $bidangurusan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->bidangurusan); ?>"><?php echo e($item->bidangurusan); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!-- __ENDBLOCK__ -->
                    </select>
                </div>
                <div>
                    
                </div>
            </div>
            <table id="myTable" class="table border-spacing-4 w- table-stripped">
                <thead>
                    <tr>
                        <th class="text-start text-lg">No.</th>
                        <th class="text-center w-[400px] text-lg">Indikator</th>
                        <th class="text-center text-lg">Satuan</th>
                        
                        <th class="text-center text-lg">2017</th>
                        <th class="text-center text-lg">2018</th>
                        <th class="text-center text-lg">2019</th>
                        <th class="text-center text-lg">2020</th>
                        <th class="text-center text-lg">2021</th>
                        <th class="text-center text-lg">2022</th>
                    </tr>
                </thead>
                <tbody class="p-10">
                    <?php
                        $i = 1;    
                    ?>
                        <!-- __BLOCK__ --><?php $__currentLoopData = $dataSatuan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                        <tr class="mt-28">
                            <td><?php echo e($i++); ?></td>
                            <td><span class="bg-[#0365FE]/20 leading-8 text-[#0365FE] font-medium p-1 rounded-2xl px-4"><?php echo e($filter->indikator); ?></span></td>
                            <td class="text-center"><?php echo e($filter->unit); ?></td>
                            
                            <td class="text-center"><?php echo e($filter->tahun2); ?></td>
                            <td class="text-center"><?php echo e($filter->tahun3); ?></td>
                            <td class="text-center"><?php echo e($filter->tahun4); ?></td>
                            <td class="text-center"><?php echo e($filter->tahun5); ?></td>
                            <td class="text-center"><?php echo e($filter->tahun6); ?></td>
                            <td class="text-center"><?php echo e($filter->tahun7); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!-- __ENDBLOCK__ -->
                </tbody>
            </table>
        </div>
    
</div>
<?php /**PATH /Users/raflifebrian/Documents/Dev/portaldata/resources/views/livewire/data.blade.php ENDPATH**/ ?>