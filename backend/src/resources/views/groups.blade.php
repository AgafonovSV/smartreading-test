<html>
    <body>
        <style>
            li {
            list-style-type: circle;
            line-height: 1.8rem;
            }

            li li {
            list-style-type: square;
            }
        </style>
        <h1 style="text-align: center;">Вывод групп с пользователями с помощью SQL</h1>
        <div>
            <ul>
            @foreach ($groupsArr as $group) 
                <li>
                    <string style="font-size: 18px; font-weight: bold;">{{ $group['group_name'] }}</string>
                    (
                    @php
                        $u1 = 1;
                    @endphp
                    @foreach ($group['users'] as $k => $user)
                        <string style="font-size: 14px;"><b style=color:red;>{{ $u1 }}:</b>{{ $user['name'] }} [id: {{ $user['id'] }} ]</string>
                        @php
                            $u1++;
                        @endphp
                    @endforeach                        
                    )
                    <!-- Закрывающий тег </li> пишем не здесь! -->
                    @if ($group['children'] != null)
                    <ul>
                        @foreach ($group['children'] as $childOne)
                        <li>
                            <string style="font-size: 16px; font-weight: bold;">{{ $childOne['group_name'] }}</string>
                            (
                            @php
                                $u2 = 1;
                            @endphp
                            @foreach ($childOne['users'] as $k2 => $user)
                                <string style="font-size: 14px;"><b style=color:red;>{{ $u2 }}:</b>{{ $user['name'] }} [id: {{ $user['id'] }} ]</string>
                                @php
                                    $u2++;
                                @endphp
                            @endforeach                        
                            )
                            <!-- То же самое для второго вложенного неупорядоченного списка! -->
                            @if ($childOne['children'] != null)
                            <ul>
                                @foreach ($childOne['children'] as $childTwo)
                                <li>
                                    <string style="font-size: 14px; font-weight: bold;">{{ $childTwo['group_name'] }}</string>
                                    (
                                    @php
                                        $u3 = 1;
                                    @endphp
                                    @foreach ($childTwo['users'] as $k3 => $user)
                                        <string style="font-size: 12px;"><b style=color:red;>{{ $u3 }}:</b>{{ $user['name'] }} [id: {{ $user['id'] }} ]</string>
                                        @php
                                            $u3++;
                                        @endphp
                                    @endforeach                        
                                    )
                                </li>
                                @endforeach   
                            </ul>
                            @endif
                        </li>
                        @endforeach   
                    </ul>
                    @endif
                    <!-- Вот закрывающий тег </li> -->
                </li>
            @endforeach
            </ul>
        </div>
    </body>
</html>