@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/services/comparison.css") . "?v=".now()->toDateTimeString() }}">
@endpush

@props(['serviceComparison'])

<section id="comparison">

    <div class="section_content">

        <div class="title_container">
            <h2 class="title">
                Comparatif des offres
            </h2>
        </div>


        <div class="comparison_container">

            <table class="comparison_table">

                <thead>
                    <tr>
                        <th></th>
                        <th>Ressources</th>
                        <th>Pack Boost</th>
                        <th>Pack Maîtrise</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($serviceComparison as $item => $offers)

                        <tr>
                            <td class="item_name">
                                {{ $item }}
                            </td>
                            <td class="offer resources">
                                @if($offers['resources'])
                                    <x-icons.check/>
                                @else
                                    -
                                @endif
                            </td>
                            <td class="offer pack-boost">
                                @if($offers['pack-boost'])
                                    <x-icons.check/>
                                @else
                                    -
                                @endif
                            </td>
                            <td class="offer pack-maitrise">
                                @if($offers['pack-maitrise'])
                                    <x-icons.check/>
                                @else
                                    -
                                @endif
                            </td>
                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</section>
