@extends('layouts.main')

@section('titulo')
Cadastro
@endsection
<!--Verificar se esse arquivo continuará na aplicação-->
@section('principal')
<main class="container mt-5 mb-5">
    <div class="container bg-body-tertiary rounded p-4">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAToAAACgCAMAAACrFlD/AAABMlBMVEX///8qKio3gMQFRXkAAADbvpoiIiIXFxdjY2OpqakJCQn5+fkbGxsfHx+Xl5d5eXny8vLPz88tfMITExMgd8AAQ3a6urru7u7n5+dHR0coesLR0dGzs7Pg4ODCwsLZ2dmEhIQ3NzdtbW2Ojo5cXFyjo6M5hs0tLS3Y4/FmZmaamppERERXV1eLr9jt8vjlx6EAACUAHUm90OdtnM8AOWsgYJsSUIehvd/k6/SVtdpUjsm0yeOPsdgAAC0pbKoAABQAABsAJU5VT0gAPngAN3bM2+17pNJKicdelMvJrowqJiBIQjljXlc0LSEALlkADzweGREXHSV1lLido66KnLNEXX+4ppKEg4jEtKKun5AAMWeSfGIqHQY7P0QYBwC4n39XRzJ1YkskFgC7ooFDNSCZhW333kRvAAAUhElEQVR4nO1dC3vaRroWYgKWhJBANhcDQkLcwTiG2NjgJk1TY5p2k7102+1mr+ds//9f2JnRFTQjCTBGbP0+eWJjhDR6+e7zzYhhPMgWmRdshRIYHHoIx4rym6vWocdwnFC/Tl6DF5XdBh/Pksm33x96FMeIwlfJ5Fn+U/XQ4zhCIKE7u24D4dADOTqor5MQN+3rHw49kqPDN28QdWds+0o99FCODCWQxNTlWRYceixHBuO9Sd1btn2jHXowxwVT6KCfYNn2u9qhR3NMyL22qLthWfbt7w49nGOC9ClpoQ3F7s1LPuZBLitpHD3LAjZzZ1Dq2PZLPuagpoOMKCpAo73/boU69onysZra0hrDQSeVERP6sCdlqzn5SU78fMiBVAJDGZIP4K4c6vJY7N5wO16yVNV0AJS0KFqXTqRSYkbhgXjSr+x47mdEESRspCXiEY03DnVv2d1Vtm7oQBETZKQyPOhVo6d7qrQxGjn/HdpvbZZnNjx3AeqkIz4m16jbQWWL/QTIUGhz6FNAL2rSwgFxU4CC7yz2STZL0QXgGXTGIB0CfNS1P22nsvVGKG8We3wi2hW4dKTzeaH4qeNt0dmIugrvOWuKZO1KX7vUXbPs9ipbH9pWNdIdKlGCoENSpyre05KmH3Kf/dRtobJyYxPiENKZ8PLgIamrh0pd4YpAXXvTqmcL0DxDAPhBWNZ3SOqYUFtXJVHHshtdplRW/PcgphUAQEIfDHQR4FjFd0gKZINPfFDqJI/hBiXS6MjUXTeiX6Pq01UYgesSlys5YxVqKicRohZlEGhVD0qd4MoDT3SwFKlrvyZGMiRIYHXwMPpoFIiMyKrE86s0p3h/HObCoS4DIsNvarakjqnZVgiQ5Yho6zbxFOVVyRDB0P+9e5Bbj2BAgKu1qRMNQY4KPz/bUsfITaBk0rxCiaRUkodFYncVKWeSO+IqcVJowU/O8ivkUbNrl7pMP8pYaNiaOpRT9lvU+L3+FZk69m2UOZ6i6NW/FJCiBYTZFYfMkzNExkNdiDsJxg7UBaL0jkJd+114paOY8TLHDyOXmGEY6P2gRjks3tR5E7EV6tib0Hhf9spcit8oFsylPILHU6iJOXW/9+WwFvKhjkL3MKcMNy3H9TzhOsEvIsScut560cmNT0LIGHqrMsTIJxgtj9KSqzoxp651RaGOTQZroOZJIQilnghQPdwppO8p5tTVX9Ooe9sL+pz3vsGWxd+6cw5yhBJz6jzTOvlV6tpBvQByqLZFQc28rRQgB09xp84xdmfsGnVXpKTXwtB1EdvKHAKWu4xOuVDcqXPyCR91Z3QLVnXdI0Viol4dJMCRhsSMq7E37TXurqlu01NVUHa6LeRn6d4o9tRp5vQ/bpxYjey+oX7EyUJTzV0vH5CCxJ66IiAlE0F+wjNFye+zE/TA1DnlGvohZtfJemwCqfuacjHJCYa3C+ii4sDUGXYNkP5BGVCoe09WJjcw2V1dA3Fg6rKZ8A/2PxMcLOqhIDvPrGPpiDX7p8MRUMd0UGy37mBZ9oZcH3WYE6lhxdPgGKhDnsLnYGF0Qhyy6sR0+24oOwbqmBxI+hwszGI10rENO5HYt9AdB3VMAfi8BK0A4ObsW+euEXEc1DEGQWHzpPkJV1/1DYeyMY6Euh8IUkcsFBu2l0jvve34SKgDfgfL5kn97ANHX/cbmTDHQl3tikAd+9F/oNuyt3d9PRLqOIKpY9u/9x/otOyROx2fFMdBHcnUEamr2o0Syv7X4h149j8idSRTR6ROs1P/Z1hgYVOX6nGtqPCfZc/U1d+TqCPZuhM7IOY3HMgWcDqdUumoINTJ9kxdlmTqWJbgYXX7bijrMJ4SW/TXPT913+dJzJHiOjuq23sWxhwHdfJror6SKux2bLKb14uGY6CumiTqK6FRzAnr0ruuh4qAY6DuG6K+sm/9SulMSyjPsLXHEVAnvCPqK2k20aXuGbZYOALqOLK+kqrEh6FO5KPiuakj+1e2fean5yDUiVIlFxX+s+yTuuJXZH1tf/J3kzizYYQFCk+O+CdifXI8zLJJQoZ/CDcR3/T/I4W59g0hh7W7TTLPsL9C7Kkjl+qw1L3zVzM7tuXef80p/tQZhLkwjPzZld/F2o11qQ1WkW2L2FPH04Tu7dmbE9/RTr/J/ovEsaeOUm+CuD5L+sOkvp3/P8PWWXGnTqPpazuZTPr3eHIWdvP7noWNP3XE+jDGWTJ55QtBSk7+v//oJObUVT7RTV0y+UnzfcCWOnH/fiLm1FH1FZm65Jl/qwWnwq5sfhcbIubU0fX1BlJH8BMtOyfn977LULypo/tXFncY++e9araxE7Ut7mMjxJs6ajyMvUQy+dlfinAWm+x9Tize1NHyV9NLQBfrzyecmdi9VwBiTR2t3mR5Cehi/alq/dm6TmJNHbHVxPIS2NYRUjGnApDg91zujDV1xFYTj6lLJgmS5fjYfYtdrKmjhyZ5izpCqur2idG2AHkixJk6eipheQkida6j2O86p1hTRy2t214CUkdYIeWuERMDV2rvijhTR5m6Zs2yCcbXpLZXd2ViwJLM3RFn6uimzvYSya9I6ZZnI0uw69bjAW16MaYuIAuzTV3yMzEAaXm2m9jN3LUCVnHHmLqAqO7aoY483+puD5Mqb343LqogYD+sGFMn0aO6G5s6f7ETo+aqbGaHJsUCOo1SpizWjTF1v6N6CdbZrohCHZN1VTaz9arYqvkF0DYAjDF14QExMf834dmuY1u5y7rLzYizuvGlrkSdu3a9RPI9bZZf8HRwifo2e9NLng2x4rgxUQB1uTchZZNA6jwVlLA9N4koDsK2YI0xdaFlk2DqTBsfrHJ0rOwrC47N1oVViE1bF7QNqZe7tL7BxGyxuUI7JbSLL3X02CTvoS6oOOLdgg5eQopq8bIrWxlTg+L4UkfPYN9GpG6NOxEYUchrpVd6hCnaysSZugFVX6891AXn9yv2Du293AiZYiwZ/ApxqQw9CY5vV2eH5mCdsgk9EXNQUVb3txZBJ0s1eiWuvLajMzWTQNhmN2z/WdwNMkKRiErdH4K6TRzqwuYf5MH65vUZoDS4yjoltYKmg/Tadu0B+zl7qYuOIOrCsdrrsA11HlNHLjqtwgC+MaTSPMiUG1q2xXFcy5BO0IOKfHv/Z1LB0eARUucxdcnXEepxdZ3w1ATzQU5ooWUmI5Ke45EKFrnjpO7GQ927SCuGWxEfq+MiBcI3z44vdQkKdV4vkYzolwRtI/JSoBwhc4svddTg5MxLXSTmIGSDVyI+XycDmpG6pOJLHS0k9nqJZCoqdRDVoc+F+iGCVDbiDikcn9oUBOpA5A+Lq1PyWcU6p5+6HyjUeb3E2Wbl8xI3BEqGSp+ogI4RvS2v0DzZFITK4TD6p1cbVTnr8kM/dRolh73xCN2bjdteBdUY8kBJe92q9dBEXarufUee50GWUjnx6iuh0ykKSjnOkIY6Cu8An+mUe1q/UN9rp8DzglKvy3upC87+f7NQz4jRyYqXIHR1vgBmleQZbK+XIC2wewE06MQtOtpeLxE9rPuNgTyZ6BW6JGFrohcwlJh4xdS92WsT2BGDuFJnhbr3z7CHzlGCuKnOzYqDfYZ9JY4SpCaxlbLJi4OlguQnVrzEi4OlgbA3zKqX2O/O/scMgp9YCYiDpv5/47BSsfw5Qj5veYkPH7798AFTF/0Bu7854C3/zvN//BPHcX/6cXmaZ9sfvv2z8dNPv/yc/PBi6gLxkWVPf3x1+Qrj8tWP56d//gm/urz8+dt9B8Sj0e1t92E+n0JcICwmFhb4Bfp/Op3Pxw/d7mi016FsAe36/C8WcZiwv/zovLr85dvPT74oQhh1H8bzu8Vk9siemsCmIgDwffPA/ONscTGdP3TjwaL61+qrFXh5/IW0Umc73D7MpxeTGetwRYjFw4GZxCzOFnfzh9unGt12AJev6Pj77ufvjqcXS8QYEq2t+KKwiGWRndzPDyaEw+/ozH3ZKTTpzu8mLJIxKmUE7dyYQSSF58u78QEkkPtCZe7yb1tuFT56mC4e4R35mXLsFhLD2XI5WbiYTJbL5SNE/tSFFTWFUIpFcHb/zPzJf6Nq7Hfb6Gt3vmARKzPIgSMYmC92Obm4m4/H3dvb0Sh0hkcQhNGo2x2P51PoVJYs5jOQRCyAi3l3i0Fvib9TNfbLhv5VeJjOTs9hZIHu1KHscXIxHT/c7j4bNrp9gHZz8mhxSJM/LH7PM/dG1djLTeJhYXz/eLpE0Zipl0gfIWXdyPcgF4vWsSoq1shBWwFDd32PXA+NQMgf+xziJ/yDorH/jBwPP9w9ni7u7y6WVuiwvAhze8VaRTUrgdwgoQCJUflyucPjicsTlPz10a9Cv9k0qFUv4XY8XVAJhCM5n0wf9ut9KT728l+RGhxup8vTyd3d3SyPrBEc7Zg6WrmuFgq4MSzb6UmGaQ6y5o8cqkYLQzRfPkRkGZDYCmjVSoWU1UdMmtREbqw7v5hQ+ENDml3Mn955PFg/C/8mi90fIpziIj+bTu+W2MQ8Ej2c7EoNNzCyRnkAVZFzrWjL/LWi4R9pSIaOdFXKMbK1J1IZs63abb6llsFZ5+ydNKtmfWI0nk7gEIj8wb9D8Xs66ydMZ859kqPiLyHT/qP5Mn8xny+gH82fLiljyyX0ofO8ZhXLTwFyUHBnPKotpliqMXXzoBa8KN6g7KTGGCsDEAcmX1qmpXId+5Q1zqPPMCaaQDmj0McuniR26S6WMOu2X2m/buwkRvPZ43Q8hWEYC2nzGeSSymFtr3aQ4LSsPrOKecMNlcmdFFqG+Url9XJTYupmV1ABaiy+cLmE/rnQWibdhmmANfNwwt7XI+TmifKH+IOx8y7iN5o+3sHvZ+HeKCm0+/Vn+gnmj8v5+A6Gbix775M2eDdgaHCDPto52/xTXzOvY27Uo2pMXW9VVdOUqmY7UMmkhIP5Cya6IzC6JyAvJRghzbhntJ4C7axLK6krhnk0tjywn77z00fofLfh73b6OBmPF8vZxCO9hNDu8v8omYQwn8ET3C9ns/xkvu4RVK2caMiMiG8Lipu9UsS8YcHsmYQCVnLr9jlT+IrmXxJQ0tLWJyTPgo2BlquVoVkraN7LSdkO/imXdUMC61kjDDMXFP6g+EHDvAF/o/HifDJHt81erKi96ncU/0+elBhPlvOHu8kMnuFh/b1WjuFyEgo5enXz5jV7JjJhVmBMxa0ajOx2T1qaKqOWQrmpwf/LkLIWJLTm7vFWPakaUhmKWNU7LawOGGwABXONWU8jDFh4mOOccJ0/HEaxMIoah1YPUH7E3kGrDtVsNl9/951P6P5DqKzf3kPephPI/B0p3ER2CmkjCspq1UTVCTxsqTPliUnD280wdtRbSmS1xlAQwFBXdHy8MOx08BdXzUAtlCXIrdmRCs+S88SagmK6FUay/EnC6ohvSNW13vju1CpE+Ak8t1NEmPI83MIcUcAYjW67OHnJw+QEBREzaJ7uCH6G+7ImdqT0dTTtIubXeavIjIattYC0p4jkKZdJ95CcVaxm2rrVpQrfKxUy6EZBSkmYa0CFqpqrwzstCq7+2L/WGp1EGdLZMLnpQSY9S457SlnDXsO2f1XL8in1fpOw2PEWmmcSf6yvMGGBRdWJi7sFi9LxR78zNLEWnxDD4dv7yeTxfvUEOQk0a4xqxh94ETva5KlYZkwBamL9ku377Sl608ACsZmZtmRIldDKb/Q1IadSaDJyrgqVWhCdweAfdc+2cT4CUQCYD8iBHcxmy+WjVRY7X/isuovsl1ChY+5ni3X7Vu7hscl6AW15aiC7jhcmQjkoY9Yag2pBA0+5HWrppNPU9RxTNJVYyrlSx5leiXPjQYG8JeboAWYgrF2KoeTBVkH68SIsHFwRO6LQCSsWslZQBXeUHVkeSGbchsePcqkGtv+1Vv+pu1awE2KqZkiHbKtkmVTL1kn80FBl510ohj2ylI+6qOq/QMK1rqun5yyq+EQq4a+IXWihrp4YZjVQZ0oDFOiqDMpHOaWOPGgN2TUNyV9lP5UfzvAujhXKyMPib7qhmX8SmWJBM9k0XTz0Jbmwejf2CxZuN5x9g2J3aYLsXr2oOMZal0ADil8OSVixjP+M1Gev5TJ/wCmXB25cJ3fcNzpY+KA1bplKvZ82kP6X7758L/K8+M2v/wzb8MV1c1nLqZkjw4/J3P/zOwkoqk5KltOcv8pmIAkH12sg01tH/rjUl4zNW8tbw4BFEADwipJOKwoIe1Bzxf3y6tav5fg0WGSbqv3tmaau1kTs8ZZpzoJWTu0l4CGlqDOlLZVp9WqGRj2gADLWY0LDniNZ9XwBSNxKMI2ITwejrBplS3lNUwfz4lKZKUjYwXBmqJmD4oGcM6PibE+whUU1JLz6vg7DdF1nTmTrBCfBoqHzFnVhlsqRuqLAaK1sqvwMz3baEFbih39AwtCXDQWNt/MSeA9Fpon4MhMeqz4h6E21Uh0MZUZt1JBQSrhkCE1AYRBISh2LXQaE7+5gNwWINUhjIb7Ll6REOVtChKHMOteD3rjuMeN2SRVCNI1ix5QBrmbXx4wsDwOe2gnaCyiQlgaA1Cnp8CGp5kaJzfi3aBerNRRAiei7LhtZpoJz4DoOZnC4fIJiQYPDUyEFN0GuoV9laBxlGPiYxQpNDJppAkjoolitApD60nM8g+1pYFa7ajCHE3AooDY6egWXIHDyCP8oI4GR3FsvwiQ7lRCgnxHEgkkywwVNc1VBBkTciU6t7v1hE08OZPQlS++AUMQOA1XzDa0kn+SsHJIxGo2eLJhVMRxA6FUdR6pCJujkQ/B0vU3xA761DgoP5DJnlVtFVLySTppD+KqPaa3VS8CaILFUtQmKJVBjpED7JPtKrf976Kd0HT8qE+kuKsZoOBHXS/DuTbnJNS1DaIf6jRxTL3fib9n3D6scWFBaBi9Ds2a+klC0h6xdAUUkYoHraxU7lvkfVsXtIBeQ8NkpHDJ9Jakz0DVEFNfiCio9p/wvS2RAeM7VB6EAAAAASUVORK5CYII=" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Formulário de Cadastro</h3>

                            <form class="px-md-2">

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1q" class="form-control" />
                                    <label class="form-label" for="form3Example1q">Nome</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1q" class="form-control" />
                                    <label class="form-label" for="form3Example1q">Sobrenome</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1q" class="form-control" />
                                    <label class="form-label" for="form3Example1q">CPF</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1q" class="form-control" />
                                    <label class="form-label" for="form3Example1q">Telefone</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1q" class="form-control" />
                                    <label class="form-label" for="form3Example1q">Email</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1q" class="form-control" />
                                    <label class="form-label" for="form3Example1q">Endereço</label>
                                </div>



                                <button type="submit" class="btn btn-outline-info btn-lg mb-1"><a href="{{route('alunosId', ['aluno_id'=>1])}}">Cadastrar</a></button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection